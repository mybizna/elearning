<?php

namespace Modules\Elearning\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

class Course extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['id', 'title', 'description', 'image', 'file', 'discount', 'hits', 'for_paid', 'published', 'category_id',];

    /**
     * The fields that are to be render when performing relationship queries.
     *
     * @var array<string>
     */
    public $rec_names = ['title'];

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
    protected $table = "elearning_course";

    /**
     * List of fields to be migrated to the datebase when creating or updating model during migration.
     *
     * @param Blueprint $table
     * @return void
     */
    public function fields(Blueprint $table = null): void
    {
        $this->fields = $table ?? new Blueprint($this->table);

        $this->fields->increments('id' )->html('hidden');
        $this->fields->string('title')->html('text');
        $this->fields->longText('description')->nullable()->html('textarea');
        $this->fields->string('image', 100)->nullable()->html('text');
        $this->fields->string('file', 100)->nullable()->html('text');
        $this->fields->integer('discount')->nullable()->html('textarea');
        $this->fields->integer('hits')->nullable()->html('text');
        $this->fields->boolean('for_paid')->html('switch')->default(false);
        $this->fields->boolean('published')->html('switch')->default(false);
        $this->fields->bigInteger('category_id')->nullable()->html('recordpicker')->relation(['elearning', 'category']);

    }
    /**
     * List of structure for this model.
     */
    public function structure($structure): array
    {
        $structure['table'] = ['title', 'published', 'category_id'];
        $structure['form'] = [
            ['label' => 'Course Detail', 'class' => 'col-span-full md:col-span-6 md:pr-2', 'fields' => ['title', 'category_id', 'for_paid', 'published']],
            ['label' => 'Course Files', 'class' => 'col-span-full md:col-span-6 md:pr-2', 'fields' => [ 'image', 'file', 'discount', 'hits']],
            ['label' => 'Course Description', 'class' => 'col-span-full md:col-span-6 md:pr-2', 'fields' => ['description']],
        ];
        $structure['filter'] = ['title', 'published', 'category_id'];
        
        return $structure;
    }

}
