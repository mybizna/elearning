<?php

namespace Modules\Elearning\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

class Usercourse extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['id', 'course_id', 'user_id'];

    /**
     * The fields that are to be render when performing relationship queries.
     *
     * @var array<string>
     */
    public $rec_names = [
        'fields' => ['user_id__name', 'course_id__title'],
        'template' => "[user_id__name] ([course_id__title]) ",
    ];

    /**
     * List of tables names that are need in this model during migration.
     *
     * @var array<string>
     */
    public array $migrationDependancy = [];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "elearning_usercourse";

    /**
     * List of fields to be migrated to the datebase when creating or updating model during migration.
     *
     * @param Blueprint $table
     * @return void
     */
    public function fields(Blueprint $table = null): void
    {
        $this->fields = $table ?? new Blueprint($this->table);

        $this->fields->increments('id')->html('hidden');
        $this->fields->bigInteger('course_id')->nullable()->html('recordpicker')->relation(['elearning', 'course']);
        $this->fields->integer('partner_id')->nullable()->html('recordpicker')->relation(['partner']);

    }
    /**
     * List of structure for this model.
     */
    public function structure($structure): array
    {
        $structure['table'] = ['course_id', 'user_id'];
        $structure['form'] = [
            ['label' => 'User Course', 'class' => 'col-span-full md:col-span-6 md:pr-2', 'fields' => ['course_id', 'user_id']],
        ];
        $structure['filter'] = ['course_id', 'user_id'];
        return $structure;
    }
    
    /**
     * Define rights for this model.
     *
     * @return array
     */
    public function rights(): array
    {
        $rights = parent::rights();

        $rights['staff'] = ['view' => true];
        $rights['registered'] = ['view' => true];
        $rights['guest'] = [];

        return $rights;
    }
}
