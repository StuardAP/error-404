<?php

namespace Database\Factories;
use  App\Models\Developer;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeveloperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Developer::class;
    public function definition()
    {
        $array_uuid_developer=Employee::where('employee_profession','developer')->pluck('uuid')->toArray();
        $array_languages=array('JavaScript','Python','Golang','PHP','C++','C#','R','Java','TypeScript','Swift','Ruby','Kotlin','C','CoffeeScript','Go','Scala','Haskell','Rust','Clojure','Elm','Erlang','F#','Fortran','Julia','Lua','Matlab','Objective-C','OCaml','Perl','Prolog','Racket','REBOL','Sass','Scheme','Scala','Self','Shell','Smalltalk','Visual Basic','VHDL','Vala','Verilog','VimL','Visual Basic .NET','XML','Yacc','Zephir','Zimpl');
        //$developer_languages_level=array('Beginner','Intermediate','Advanced');

        return [
           'developer_id'=>$this->faker->unique()->randomElement($array_uuid_developer),
           'developer_languages'=>$this->faker->randomElement($array_languages),
        ];
    }
}
