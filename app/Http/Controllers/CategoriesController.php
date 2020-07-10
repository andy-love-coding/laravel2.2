<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;
use App\Models\User;

class CategoriesController extends Controller
{
    public function show(Category $category, Request $request, Topic $topic, User $user)
    {
        // 读取分类 ID 关联的话题，并按每 20 条分页
        // $topics = Topic::where('category_id', $category->id)->paginate(20);
        $topics = $topic->withOrder($request->order) // 排序
                        ->where('category_id', $category->id)
                        ->with('user', 'category')  // 预加载防止 N+1 问题
                        ->paginate(10);
        $active_users = $user->getActiveUsers();
        return view('topics.index', compact('topics', 'category', 'active_users'));
    }
}
