<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Task;

class TaskPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    /**
     *
     * @param User $user
     * @param Task $task
     * @return bool
     */
    // 認証ユーザーと削除しようとしているタスクのuser_idが同じか判定し、実行の認否を判定する（実行自体を判定しているわけではない）
    // 下記(というかtaskポリシーそのもの)を有効化するためには、taskモデルとtaskポリシーの紐づけが必要→
    // →AuthServiceProvider.php内の「protected $policies = [」 以降に、紐付けの記述が必要←条件はあるが、記載は不要
    public function destroy(User $user, Task $task) {
        return $user->id === $task->user_id;
    }
}
