<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<div class="flex items-center bg-gray-200 text-gray-800">
  <div class="p-4 w-full">
    <div class="grid grid-cols-12 gap-4">
      <div class="col-span-12 sm:col-span-6 md:col-span-3">
        <div class="flex flex-row bg-gray-600 shadow-sm rounded-xl p-4">
          <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
          </div>
          <div class="flex flex-col flex-grow ml-4">
            <div class="text-sm text-white">Traced</div>
            <div class="font-bold text-white text-lg">{{ $patients->count() }}</div>
          </div>
        </div>
      </div>
      <div class="col-span-12 sm:col-span-6 md:col-span-3">
        <div class="flex flex-row bg-blue-600 shadow-sm rounded-xl p-4">
          <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
          </div>
          <div class="flex flex-col flex-grow ml-4">
            <div class="text-sm text-white">Active</div>
            <div class="font-bold text-white text-lg">{{ $patients->where('status', '=', 'Active')->count() }}</div>
          </div>
        </div>
      </div>
      <div class="col-span-12 sm:col-span-6 md:col-span-3">
        <div class="flex flex-row bg-orange-500 shadow-sm rounded-xl p-4">
          <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
          </div>
          <div class="flex flex-col flex-grow ml-4">
            <div class="text-sm text-white">Recovered</div>
            <div class="font-bold text-white text-lg">{{ $patients->where('status', '=', 'Recovered')->count() }}</div>
          </div>
        </div>
      </div>
      <div class="col-span-12 sm:col-span-6 md:col-span-3">
        <div class="flex flex-row bg-red-600 shadow-sm rounded-xl p-4">
          <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
          </div>
          <div class="flex flex-col flex-grow ml-4">
            <div class="text-sm text-white">Deceased</div>
            <div class="font-bold text-white text-lg">{{ $patients->where('status', '=', 'Deceased')->count() }}</div>
          </div>
        </div>
      </div>
      </div>

  <div class="mx-1 pt-5">
   <div class="grid gap-6 mb-8 md:grid-cols-2">
              <div class="min-w-0 p-4 bg-white rounded-xl shadow-sm dark:bg-gray-800">
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                  Global cases
                </h4>
                <div class="bingwidget" data-type="covid19" data-market="en-us" data-language="en-us"></div>
              </div>
              <div class="min-w-0 p-4 text-gray-800 bg-white rounded-xl shadow-sm">
                <h4 class="mb-4 font-semibold">
                  Local Cases
                </h4>  
                <div class="dropdown show">
  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Show by
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">Status</a>
    <a class="dropdown-item" href="{{ route('piechartregion') }}" :active="request()->routeIs('piechartregion')">Region</a>
  </div>
</div>

                <div id="pie_chart" class="pr-3 pb-3 pt-4"></div>
              </div>
            </div>
</div>

<script type="text/javascript">
        var analytics = <?php echo $region; ?>

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart()
        {
            var data = google.visualization.arrayToDataTable(analytics);
            var options = {
                title : 'Region'
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
            chart.draw(data, options);
        }
    </script>
    <script src="//www.bing.com/widget/bootstrap.answer.js" async=""></script>
      </script>  
</x-app-layout>