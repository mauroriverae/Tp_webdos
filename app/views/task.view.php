<?php

class TaskView {

    function showTasks($tasks) {
        include './templates/header.php';    
        include './templates/form_alta.php';
        include './templates/table.php';
        
        echo '<tr>';
        foreach ($tasks as $task) {
           echo "   <tr>$task->company</tr>
                    <tr>$task->sector</tr>
                    <tr>$task->tiker</tr>
           ";
        }
        echo "</tr>
            </tbody>
        </table> ";
    
        include './templates/footer.php';
    }
}

        
