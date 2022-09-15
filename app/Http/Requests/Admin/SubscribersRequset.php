<?php

/**
 *  app/Http/Requests/Admin/ProjectRequest.php
 *
 * Date-Time: 10.06.21
 * Time: 15:07
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ProjectRequest
 * @package App\Http\Requests\Admin
 */
class SubscribersRequset extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        // Check if method is get,fields are nullable.
        if ($this->method() === 'GET') {
            return [];
        }

        return [
            // config('translatable.fallback_locale') . '.name' => 'required|string|max:255',
            // config('translatable.fallback_locale') . '.position' => 'required|string|max:255',
            // config('translatable.fallback_locale') . '.content' => 'nullable|string|max:255',
            // config('translatable.fallback_locale') . '.hobby' => 'nullable|string|max:255',
            // config('translatable.fallback_locale') . '.super_power' => 'nullable|string|max:255',
            // config('translatable.fallback_locale') . '.favorite' => 'nullable|max:255',
            // 'profession_id' => 'required',
        ];
    }
}
