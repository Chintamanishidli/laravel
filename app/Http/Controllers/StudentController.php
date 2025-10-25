<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function addcourse()
    {
        DB::table('courses')->insert([
            'id' => 1,
            'course_name' => 'Computer Science',
            'duration' => '3 Months'
        ]);
    }
    // ✅ 1. CREATE
    public function addStudent()
    {
        DB::table('students')->insert([
            'name' => 'Chintamani',
            'email' => 'chinta@example.com',
            'course_id' => 1,
            'marks' => 85
        ]);

        return "Student added successfully!";
    }

    // ✅ 2. READ (JOIN)
    public function getStudents()
    {
        $students = DB::table('students')
            ->join('courses', 'students.course_id', '=', 'courses.id')
            ->select('students.name', 'students.email', 'courses.course_name', 'students.marks')
            ->get();

        return response()->json($students);
    }

    // ✅ 3. UPDATE
    public function updateMarks()
    {
        DB::table('students')
            ->where('name', 'Chintamani')
            ->update(['marks' => 90]);

        return "Marks updated!";
    }

    // ✅ 4. DELETE
    public function deleteStudent()
    {
        DB::table('students')
            ->where('name', 'Chintamani')
            ->delete();

        return "Student deleted!";
    }

    // ✅ 5. AGGREGATES
    public function showStats()
    {
        $total = DB::table('students')->count();
        $average = DB::table('students')->avg('marks');
        $highest = DB::table('students')->max('marks');

        return response()->json([
            'total_students' => $total,
            'average_marks' => $average,
            'highest_marks' => $highest
        ]);
    }

    // ✅ 6. RAW QUERY
    public function topStudents()
    {
        $top = DB::select('SELECT name, marks FROM students WHERE marks > ?', [80]);
        return response()->json($top);
    }
    public function showStudentsTable()
    {
        $students = DB::table('students')
            ->join('courses', 'students.course_id', '=', 'courses.id')
            ->select('students.name', 'students.email', 'courses.course_name', 'students.marks')
            ->get();

        // Passing data to the Blade view
        return view('students', compact('students'));
    }
}
