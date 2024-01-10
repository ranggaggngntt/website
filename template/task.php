<section id="task" class="bg-black w-full pl-14 py-20 text-white">
   <div class="container mx-auto container-lg px-10 lg:px-10">
      <h1 class="font-bold text-5xl lg:text-6xl mb-10">My Task</h1>
      <div class="flex flex-col border-2 border-white rounded-lg p-6 gap-4">

      <?php

        $tasks = [
            'function.php' => ['path' => 'php/function/function.php', 'extension' => 'PHP'],
            'function1.php' => ['path' => 'php/function/function1.php', 'extension' => 'PHP'],
            'function_date.php' => ['path' => 'php/function/function_date.php', 'extension' => 'PHP'],
            'looping_latihan1.php' => ['path' => 'php/looping/looping_latihan1.php', 'extension' => 'PHP'],
            'looping_latihan2.php' => ['path' => 'php/looping/looping_latihan2.php', 'extension' => 'PHP'],
            'looping_latihan3.php' => ['path' => 'php/looping/looping_latihan3.php', 'extension' => 'PHP'],
            'looping_task10.php' => ['path' => 'php/looping/looping_task10.php', 'extension' => 'PHP'],

            'array_assoc.php' => ['path' => 'php/array/array_assoc.php', 'extension' => 'PHP'],
            'array_list.php' => ['path' => 'php/array/array_list.php', 'extension' => 'PHP'],
            'array_multi.php' => ['path' => 'php/array/array_multi.php', 'extension' => 'PHP'],
            'array_tabel.php' => ['path' => 'php/array/array_tabel.php', 'extension' => 'PHP'],
            'task1_array.php' => ['path' => 'php/array/task1_array.php', 'extension' => 'PHP'],
            'task2_array.php' => ['path' => 'php/array/task2_array.php', 'extension' => 'PHP'],
            'task8.php' => ['path' => 'php/task8.php', 'extension' => 'PHP'],

            'index.html' => ['path' => 'html/index.html', 'extension' => 'HTML'],
            'bersepeda.html' => ['path' => 'html/bersepeda.html', 'extension' => 'HTML'],
            'jquery.html' => ['path' => 'html/jquery.html', 'extension' => 'HTML'],
            'latihan1.html' => ['path' => 'html/latihan1.html', 'extension' => 'HTML'],
            'list.html' => ['path' => 'html/list.html', 'extension' => 'HTML'],
            'paragraf.html' => ['path' => 'html/paragraf.html', 'extension' => 'HTML'],
            'tabel.html' => ['path' => 'html/tabel.html', 'extension' => 'HTML'],
            'wfh.html' => ['path' => 'html/wfh.html', 'extension' => 'HTML'],
        ];

        // Loop through the tasks and generate HTML
        foreach ($tasks as $taskTitle => $taskInfo) {
            // Set background color class based on the file extension
            $bgColorClass = ($taskInfo['extension'] === 'PHP') ? 'bg-blue-700' : 'bg-orange-700';

            echo '<div class="flex flex-row justify-between items-center">';
            echo '<h1 class="text-xl font-semibold">' . $taskTitle . ' <span class="' . $bgColorClass . ' rounded-lg px-1 text-sm font-normal ms-3">' . $taskInfo['extension'] . '</span></h1>';
            echo '<div class="flex flex-row gap-4">';
            echo '<a href="/raw/tugas/' . $taskInfo['path'] . '" class="border-2 border-red-600 text-red-600 px-6 py-1 rounded-lg hover:text-white hover:bg-red-600">Raw</a>';
            echo '<a href="/tugas/' . $taskInfo['path'] . '" class="border-2 bg-blue-700 text-' . $taskInfo['extension'] . '-600 px-6 py-1 rounded-lg hover:text-white hover:bg-' . $taskInfo['extension'] . '-600">View</a>';
            echo '</div>';
            echo '</div>';
            echo PHP_EOL; // Add a newline for better readability
        }

      ?>

      </div>
   </div>
</section>