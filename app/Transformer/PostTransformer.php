<?php	
namespace App\Transformer;
 
class PostTransformer {
 
    public function transform($task) {
        return [
            'id' => $task->id,
            'title' => $task->title,
            'body' => $task->body
        ];
    }
 
}