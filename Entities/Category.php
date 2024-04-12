<?php

namespace Modules\Elearning\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

class Category extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['id', 'title', 'description', 'published'];

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
    protected $table = "elearning_category";

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
        $this->fields->boolean('published')->nullable()->html('switch')->default(false);

    }

    /**
     * List of structure for this model.
     */
    public function structure($structure): array
    {
        $structure['table'] = ['title', 'published'];
        $structure['form'] = [
            ['label' => 'Category Detail', 'class' => 'col-span-full md:col-span-6 md:pr-2', 'fields' => ['title', 'published']],
            ['label' => 'Category Setting', 'class' => 'col-span-full md:col-span-6 md:pr-2', 'fields' => ['description']],
        ];
        $structure['filter'] = ['title', 'published'];
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
