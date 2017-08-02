<?php

namespace WoXuanWang\ActionLog\Requests;

use Illuminate\Foundation\Http\FormRequest;
use WoXuanWang\ActionLog\Models\ActionLog;
use zgldh\Scaffold\Traits\HasWithParameter;

class CreateActionLogRequest extends FormRequest
{
    use HasWithParameter;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return ActionLog::$rules;
    }
}
