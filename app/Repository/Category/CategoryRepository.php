<?php


namespace App\Repository\Category;


use App\Category;

class CategoryRepository implements CategoryRepositoryInterface
{

    /**
     * @var Category
     */
    protected $model;

    public function __construct(Category $model)
    {
        $this->model = $model;
    }

    public function paginate($request)
    {
        $q = $request->query('search');

        return $this->model::with(['parent'])
            ->where('name' , 'LIKE' , "%{$q}%")
            ->paginate($request->query('limit' , 10));
    }

    public function create($request)
    {
        $request = $this->levelHandle($request);
        return $this->model::create($request->all());
    }

    public function update($request, Category $category)
    {
        $request = $this->levelHandle($request);
        $category->update($request->all());
        return $category;
    }

    public function all()
    {
        return $this->model::all();
    }


    /**
     * @param $request
     * @return mixed
     */
    private function levelHandle($request)
    {

        if ($request->input('parent_id')) {
            $parent = Category::find($request->input('parent_id'));
            $request->merge([
                'level' => $parent->level + 1
            ]);
        }

        return $request;
    }
}
