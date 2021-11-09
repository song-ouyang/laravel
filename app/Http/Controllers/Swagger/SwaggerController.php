<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



/**
 * @OA\Info(
 *     version="3.0",
 *     title="Swagger接口文档",
 *     @OA\Contact(
 *         name="文档",
 *         url="https://laravelacademy.org/post/19694",
 *         email="1723767677@qq.com"
 *     )
 * )
 */




/**
 * @OA\Server(
 *     url="http://127.0.0.1:8000/api/swagger",
 *     description="后端接口地址"
 * )
 */

/**
 * @OA\Server(
 *     url="oys68.cn",
 *     description="接口地址二"
 * )
 */

/**
 * @OA\Tag(
 * name="测试-oys",
 * description="oys用来测试的模块",
 * @OA\ExternalDocumentation(
 * description="测试的接口地址",
 *     url="http://127.0.0.1:8000"
 * )
 * )
 */

/**
 * @OA\Tag(
 * name="实战-xxx",
 * description="用来实战的模块",
 * @OA\ExternalDocumentation(
 * description="实战的接口地址",
 *     url="http://127.0.0.1:8000"
 * )
 * )
 */



class SwaggerController extends Controller
{
    /**
     * @OA\Post(
     *     path="/bbb",
     *     operationId="newTaskItem",
     *     tags={"测试-oys"},
     *     summary="测试post方法 常规方法",
     *     description="通过访问相应的request来实现post方法",
     *     @OA\Parameter(
     *         name="student_name",
     *         description="学生名",
     *         required=false,
     *         in="query",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="student_age",
     *         description="学生年龄",
     *         required=false,
     *         in="query",
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="student_status",
     *         description="学生状态",
     *         required=false,
     *         in="query",
     *         @OA\Schema(
     *             type="boolean"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="返回成功",
     *         @OA\JsonContent(ref="#/components/schemas/bbb")
     *     ),
     *     @OA\Response(response=404,description="路径错误"),
     *     @OA\Response(response=422,description="参数错误"),
     *     @OA\Response(response=500,description="代码或者参数参数"),
     * )
     *
     * @OA\Schema(
     *      schema="bbb",
     *      required={"student_name","student_age","student_status"},
     *      @OA\Property(
     *          property="code",
     *          type="integer",
     *          example="200"
     *      ),
     *      @OA\Property(
     *          property="msg",
     *          type="string",
     *          example="bbb方法操作成功"
     *      ),
     *      @OA\Property(
     *          property="student_name",
     *          type="string",
     *          example="欧阳松"
     *      ),
     *      @OA\Property(
     *          property="student_age",
     *          type="integer",
     *          example="20"
     *      ),
     *      @OA\Property(
     *          property="student_status",
     *          type="boolean",
     *          example="true"
     *      )
     * )
     *
     */
    public function bbb(Request $request)
    {

        $a=$request['student_name'];
        $b=$request['student_age'];
        $c=$request['student_status'];
        $d =([
            'a'=>$a,
            'b'=>$b,
            'c'=>$c,
        ]);
        return $d ?
            json_success("查看成功",$d,200):
            json_fail("查看失败",NULL,100);
    }

    /**
     * @OA\Get(
     *     path="/aaa",
     *     operationId="newTaskItem",
     *     tags={"测试-oys"},
     *     summary="测试get方法 test2",
     *     description="描述干嘛的，中文",
     *     @OA\Parameter(
     *         name="aaa",
     *         description="Accept header to specify api version",
     *         required=false,
     *         in="query",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(response=200,description="恭喜成功",),
     *     @OA\Response(response=404,description="路径错误"),
     *     @OA\Response(response=422,description="参数错误"),
     *     @OA\Response(response=500,description="代码或者参数参数"),
     * )
     */
    public function aaa(Request $request)
    {

        $aaa=$request['aaa'];
        return $aaa;
    }

    /**
     * @OA\Post(
     *     path="/ccc",
     *     operationId="newTaskItem",
     *     tags={"测试-oys"},
     *     summary="测试post方法 传json格式的数据",
     *     description="测试post方法 传json格式的数据，用post方法，传json",
     *   @OA\RequestBody(
     *       @OA\MediaType(
     *   mediaType="application/json",
     *    @OA\Schema(
     *      @OA\Property(
     *          property="student_name",
     *          type="string",
     *          description="用户名称"
     *      ),
     *      @OA\Property(
     *          property="student_age",
     *          type="integer",
     *          description="年龄"
     *      ),
     *      @OA\Property(
     *          property="student_status",
     *          type="boolean",
     *          description="状态"
     *      )
     *      ))),
     *     @OA\Response(response=200,description="返回成功",),
     *     @OA\Response(response=404,description="路径错误"),
     *     @OA\Response(response=422,description="参数错误"),
     *     @OA\Response(response=500,description="代码或者参数参数"),
     * )
     */
    public function ccc(Request $request)
    {

        $a=$request['student_name'];
        $b=$request['student_age'];
        $c=$request['student_status'];
        $d =([
            'a'=>$a,
            'b'=>$b,
            'c'=>$c,
        ]);
        return $d ?
            json_success("查看成功",$d,200):
            json_fail("查看失败",NULL,100);
    }
}
