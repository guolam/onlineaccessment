<x-app-layout>
    <div>
        <!-- ここにビューのコードを追加 -->
        <p>date: {{ $date }}</p>
        <!-- 他のビューコードを追加 -->

        @foreach ($result as $index => $value)
            <!-- 表示内容を記述 -->
            <p>{{ $attributions[$index] }} : {{ $value }}</p>
        @endforeach
    </div>

</x-app-layout>
