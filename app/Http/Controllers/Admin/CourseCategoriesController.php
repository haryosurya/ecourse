<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CourseCategoryDataTable;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseCategoriesController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $categoryList = [];
    private $parentList = [];
    private $childList = [];

    protected $tableName='course_categories';
    //protected $primary='course_category_id';

    public function getAllCategories(){
        $this->getCategoriesForParent(0);
        return $this->categoryList;
    }

    public function getCategoryParent($id){
        $category = CourseCategory::find($id);
        if (!empty($category->parent_id)){
            $this->parentList[] = $category->parent_id;
            $this->getCategoryParent($category->parent_id);
        }
    }


    public function getAllParents($id){
        $this->getCategoryParent($id);
        return $this->parentList;
    }

    public function getChildren($id){
        $categories = CourseCategory::where('parent_id',$id)->orderBy('sort_order')->where('enabled',1)->get();
        foreach ($categories as $category){
            $this->childList[$category->id] = $category->id;
            $this->getChildren($category->id);
        }
    }

    public function getAllChildren($id){
        $this->getChildren($id);
        return $this->childList;
    }

    public function getCategoriesForParent($parentId,$level=0,$exId=null){

        if(empty($parentId)){
            $categories = CourseCategory::whereNull('parent_id')->orderBy('sort_order')->get();
        }
        else{
            $categories = CourseCategory::where('parent_id',$parentId)->orderBy('sort_order')->get();
        }


        $repeater = '  |__  ';

        foreach($categories as $row)
        {

            if (isset($exId) && $exId==$row->id) {
                continue;
            }

            $this->categoryList[$row->id] = str_repeat($repeater,$level).$row->name;
            $this->getCategoriesForParent($row->id, $level+1,$exId);
        }

    }
    public function index(CourseCategoryDataTable $dataTable)
    {
        //
        $this->categories = CourseCategory::get();
        $this->pageTitle = __lang('Course Categories');

        // $this->categories = $this->categories->getAllCategories();

        // $this->paginator = $this->categories->getPaginatedRecords(true);

        // $this->paginator->setCurrentPageNumber((int)request()->get('page', 1));
        // $this->paginator->setItemCountPerPage(30);
        return $dataTable->render('admin.course.course-cat.index', $this->data); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $this->categories = CourseCategory::get();
        $this->pageTitle = __lang('Course Categories');

        // $this->categories = $this->categories->getAllCategories();

        // $this->paginator = $this->categories->getPaginatedRecords(true);

        // $this->paginator->setCurrentPageNumber((int)request()->get('page', 1));
        // $this->paginator->setItemCountPerPage(30);
        return view('admin.course.course-cat.index', $this->data); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 
        $x = CourseCategory::find($id);
        try{ 
            CourseCategory::destroy($id);
            flashMessage(__lang('Record deleted'));
        }
        catch(\Exception $ex){
            dd($ex->getTraceAsString());
            $this->deleteError();
        }
        return redirect('admin.courseCategories');
        // return adminRedirect(array('controller'=>'session','action'=>'groups'));
    }
}
