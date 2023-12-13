@php
    $user = "Wajahat Awan";
    $fruits = ["Apple", "Orange", "Banana", "Grapes"];
@endphp

{{-- <script>
    var data = @json($fruits);
    console.log(data);
</script> --}}

<script>
    // var data = @json($fruits);

    var data = {{ Js::from($fruits ) }};

    data.forEach(function(entry) {
        console.log(entry);
    });
</script>