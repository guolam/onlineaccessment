<x-app-layout>
    <div>
        <!-- ここにビューのコードを追加 -->
        <p>Index: {{ $result }}</p>
        <!-- 他のビューコードを追加 -->

        @foreach ($result as $index => $array)
            <!-- 表示内容を記述 -->
        @endforeach
        dd($request->query('result'));
    </div>

</x-app-layout>
