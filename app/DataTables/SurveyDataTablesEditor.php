<?php

namespace App\DataTables;

use App\Survey;
use App\User;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTablesEditor;
use Illuminate\Database\Eloquent\Model;

class SurveyDataTablesEditor extends DataTablesEditor
{
    protected $model = Survey::class;

    /**
     * Get create action validation rules.
     *
     * @return array
     */
    public function createRules()
    {
        return [
            'name'  => 'required',
        ];
    }

    /**
     * Get edit action validation rules.
     *
     * @param Model $model
     * @return array
     */
    public function editRules(Model $model)
    {
        return [
            'name'  => 'required',
        ];
    }

    /**
     * Get remove action validation rules.
     *
     * @param Model $model
     * @return array
     */
    public function removeRules(Model $model)
    {
        return [];
    }

    /**
     * Pre-create action event hook.
     *
     * @param Model $model
     * @return array
     */
    public function creating(Model $model, array $data)
    {
        return $data;
    }

    /**
     * Pre-update action event hook.
     *
     * @param Model $model
     * @return array
     */
    public function updating(Model $model, array $data)
    {
        if (empty($data['password'])) {
            unset($data['password']);
        } else {
            $data['password'] = bcrypt($data['password']);
        }

        return $data;
    }
}
