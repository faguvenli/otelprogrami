
    @extends('main')

    @section('title', '| Müşteriler')

    @section('content')


        <div class="content-wrapper">
            <a class="btn btn-dark btn-sm float-right mb-3" data-fancybox data-type="iframe" data-src="{{ route('customers.create') }}" href="javascript:;">Müşteri Ekle</a>
            <div>
                <table id="customersTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Müşteri</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)

                            <tr data-customerID="{{ $customer->id }}" class="mainRow">
                                <td>{{ $customer->name }}</td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
            <div id="paging"></div>
        </div>


    @endsection

    @section('custom_script')

    <script>

        $(document).ready(function() {
            $("#customersTable").DataTable();

            $("tr[data-customerID]").on("click",function() {
                var customerID = $(this).attr('data-customerID');
                $.fancybox.open({
                    src : '{{ url('/') }}/customers/'+customerID+'/edit',
                    type: 'iframe'
                })
            })
        })

    </script>

    @endsection
