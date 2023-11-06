<?php

namespace App\Rules;

use App\Models\Student;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Hash;

class CheckPassword implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $student = Student::where("email", request()->email)->first();
        if (is_null($student) || !Hash::check($value, $student->password)) {
            $fail("email or $attribute wrong");
        }
    }
}
