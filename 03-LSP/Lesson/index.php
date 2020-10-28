<?php

interface LessonRepositoryInterface
{
    public function getAll();
}

class FileLessonRepository implements LessonRepositoryInterface
{
    public function getAll()
    {
        // return through filesystem
        return [];
    }
}

class DBLessonRepository implements LessonRepositoryInterface
{
    public function getAll()
    {

        // return Eloquent
        // violates the LSP
        // return App\Lesson::all();

        return App\Lesson::all()->toArray(); // right way
    }
}
