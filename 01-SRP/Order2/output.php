<? 
namespace Report;
use Report\Repositories\OrdersRepository;

class OrdersReport
{
        protected $repo;
        protected $formatter;

        public function __construct(OrdersRepository $repo, OrdersOutPutInterface $formatter)
        {
                $this->repo = $repo;
                $this->formatter = $formatter;
        }

        public function getOrdersInfo($startDate, $endDate)
        {
                $orders = $this->repo->getOrdersWithDate($startDate, $endDate);

                return $this->formatter->output($orders);
        }
}

namespace Report;

interface OrdersOutPutInterface
{
        public function output($orders);
}

namespace Report;

class HtmlOutput implements OrdersOutPutInterface
{
        public function output($orders)
        {
                return '<h1>Orders: ' . $orders . '</h1>';
        }

}

namespace Report\Repositories;
use DB;

class OrdersRepository
{
    public function getOrdersWithDate($startDate, $endDate)
    {
        return DB::table('orders')->whereBetween('created_at', [$startDate, $endDate])->get();
    }
}