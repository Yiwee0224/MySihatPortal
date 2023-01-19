@extends('layout.layout')

@section('content')
    <div class="flex flex-col justify-center items-center ">
        <table class="table-auto m-5 content-center border-separate border-spacing-5">
            <?php for ($i = 0; $i < 2; $i++) {
                echo '<tr>';
                for ($a = 0; $a < 2; $a++) {
                    if ($i == 0) {
                        $c = $i + $a;
                    } else {
                        $c = $i + $a + 1;
                    }
                    echo '<td>';
                    echo '<div class="max-w-sm  bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">';
                    echo '  <a href="#">';
                    // echo '<img class="rounded-t-lg" src="https://www.arabnews.com/sites/default/files/styles/n_670_395/public/dragon_ball.png?itok=K-I_zbWN" />';
                    echo "<img src='{$images[$c]}' alt='{$images[$c]}' />";
                    echo '</a>';
                    echo '<div class="p-5">';
                    echo '  <a href="#">';
                    echo " <h5 class='mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white'>{$titles[$c]}</h5>";
                    echo '     </a>';
                    echo "<p class='mb-3 font-normal text-gray-700 dark:text-gray-400'>{$descs[$c]}</p>";
                    echo "<a href='$urls[$c]' class='inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800'>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Read more
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <svg aria-hidden='true' class='w-4 h-4 ml-2 -mr-1' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z' clip-rule='evenodd'></path></svg>";
                    echo '</a>';
                    echo ' </div>';
                    echo ' </div>';
                    echo '</td>';
                    // echo "<td><b>  $titles[$c]  </b> $descs[$c] <img src=$imgs[$c] ></td>";
                    // echo "<td> <b>  $titles[{$i+1}]  </b> $descs[{$i+1}] <img src=$imgs[{$i+1}] >  </td>";
                }
                echo '</tr>';
                // echo '</tr>';

                // $image = 'https://www.caledoniacourier.com/wp-content/uploads/2022/11/31138137_web1_221128-LJI-BC-Fast-Track-Addiction-Treatment-St-Pauls-Hospital-Vancouver_1.jpg';
                // $imageData = base64_encode(file_get_contents($image));
                // echo '<img src="data:image/jpeg;base64,' . $imageData . '">';
            } ?>
        </table>
    </div>
@endsection
