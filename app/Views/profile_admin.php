<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <script src="https://kit.fontawesome.com/b8f504d174.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="h-full bg-gray-200 p-8">
        <div class="bg-white rounded-lg shadow-xl pb-8">
            <div class="w-full h-[250px]">
                <img src="<?php echo base_url('images/profile_restiqa.png'); ?>" class="w-full h-full rounded-tl-lg rounded-tr-lg">
            </div>
            <div class="flex flex-col items-center -mt-20">
                <img src="<?php echo base_url('images/iqbal.jpg'); ?>" class="w-40 border-4 border-white rounded-full">
                <div class="flex items-center space-x-2 mt-2">
                    <p class="text-2xl">Iqbal</p>
                </div>
                <p class="text-gray-700">RESTIQA</p>
                <p class="text-sm text-gray-500">Admin</p>
            </div>
            <div class="flex-1 flex flex-col items-center lg:items-end justify-end px-8 mt-2">
                <div class="flex items-center space-x-4 mt-2">
                    <button class="flex items-center bg-blue-600 hover:bg-blue-700 text-gray-100 px-4 py-2 rounded text-sm space-x-2 transition duration-100">
                        <i class="fa-solid fa-user-pen"></i>
                        <span>Edit Profile</span>
                    </button>
                    <button class="flex items-center bg-blue-600 hover:bg-blue-700 text-gray-100 px-4 py-2 rounded text-sm space-x-2 transition duration-100">
                        <i class="fa-solid fa-download"></i>
                        <span>Save</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="my-4 flex flex-col 2xl:flex-row space-y-4 2xl:space-y-0 2xl:space-x-4">
        
            <div class="flex flex-col w-full ">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                <h4 class="text-xl text-gray-900 font-bold">Personal Info</h4>
                    <ul class="mt-2 text-gray-700">
                        <li class="flex border-y py-2">
                            <span class="font-bold w-24">Nama Lengkap:</span>
                            <span class="text-gray-700">Iqbal</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Tanggal Lahir:</span>
                            <span class="text-gray-700">05-01-2002</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Join:</span>
                            <span class="text-gray-700">5 Jan 2020</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">No HP:</span>
                            <span class="text-gray-700">088173659381</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Email:</span>
                            <span class="text-gray-700">Iqbal@gmail.com</span>
                        </li>
                    </ul>   
                </div>
            </div>
        </div>

    </div>

    <script>

            const DATA_SET_VERTICAL_BAR_CHART_1 = [68.106, 26.762, 94.255, 72.021, 74.082, 64.923, 85.565, 32.432, 54.664, 87.654, 43.013, 91.443];

            const labels_vertical_bar_chart = ['January', 'February', 'Mart', 'April', 'May', 'Jun', 'July', 'August', 'September', 'October', 'November', 'December'];

            const dataVerticalBarChart= {
                labels: labels_vertical_bar_chart,
                datasets: [
                    {
                        label: 'Revenue',
                        data: DATA_SET_VERTICAL_BAR_CHART_1,
                        borderColor: 'rgb(54, 162, 235)',
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    }
                ]
            };
            const configVerticalBarChart = {
                type: 'bar',
                data: dataVerticalBarChart,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Last 12 Months'
                        }
                    }
                },
            };

            var verticalBarChart = new Chart(
                document.getElementById('verticalBarChart'),
                configVerticalBarChart
            );
        </script>
</body>
</html>