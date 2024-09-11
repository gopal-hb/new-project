@extends('admin.assets.layout')

@section('title', 'Dashboard')

@push('css')
    <style>
        @media (min-width: 1300px) and (max-width: 1400px) {
            .card-title {
                font-size: 14px;
            }
        }

        @media (min-width: 1200px) and (max-width: 1300px) {
            .card-title {
                font-size: 13px;
            }
        }
    </style>
@endpush

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <div class="col-xxl-3 col-md-3">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Schools</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-building"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>
                                                @isset($TotalSchools)
                                                    {{ $TotalSchools }}
                                                @endisset
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xxl-3 col-md-3">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Active Schools</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-building-check"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>
                                                @isset($ActiveSchools)
                                                    {{ $ActiveSchools }}
                                                @endisset
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xxl-3 col-md-3">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Inactive Schools</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-building-dash"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>
                                                @isset($InactiveSchools)
                                                    {{ $InactiveSchools }}
                                                @endisset
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xxl-3 col-md-3">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Total Packages</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-box-seam"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>
                                                @isset($TotalPackages)
                                                    {{ $TotalPackages }}
                                                @endisset
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <section class="section dashboard">
                            <div class="row">

                                <!-- Left side columns -->
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <h4 class="card-title">
                                                                Transaction
                                                            </h4>
                                                        </div>
                                                        <div class="col-md-3 mt-3">
                                                            <select class="form-control form-control-sm year-filter"
                                                                name="year">
                                                                <option value="2024" selected="selected">2024</option>
                                                                <option value="2023">2023</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="row flex-col">
                                                    <h5 class="col-6 card-title">Transaction</h5>
                                                    <select class="col-3 card-title" name="year" id="year">
                                                        <option>2024</option>
                                                        <option>2023</option>
                                                    </select>
                                                </div> --}}
                                                    {{-- <h5 class="card-title">Column Chart</h5> --}}

                                                    <!-- Column Chart -->
                                                    <div id="columnChart"></div>

                                                    <script>
                                                        document.addEventListener("DOMContentLoaded", () => {
                                                            new ApexCharts(document.querySelector("#columnChart"), {
                                                                series: [{
                                                                    name: 'Amount',
                                                                    data: [0, 5.50, 0, 0, 10.50, 0, 0, 0, 0, 0, 0, 0]
                                                                }],
                                                                chart: {
                                                                    type: 'bar',
                                                                    height: 350
                                                                },
                                                                plotOptions: {
                                                                    bar: {
                                                                        horizontal: false,
                                                                        columnWidth: '55%',
                                                                        endingShape: 'rounded'
                                                                    },
                                                                },
                                                                dataLabels: {
                                                                    enabled: false
                                                                },
                                                                stroke: {
                                                                    show: true,
                                                                    width: 2,
                                                                    colors: ['transparent']
                                                                },
                                                                xaxis: {
                                                                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct',
                                                                        'Nov', 'Dec'
                                                                    ],
                                                                },
                                                                // yaxis: {
                                                                //     title: {
                                                                //         text: '$ (thousands)'
                                                                //     }
                                                                // },
                                                                fill: {
                                                                    opacity: 1
                                                                },
                                                                tooltip: {
                                                                    y: {
                                                                        formatter: function(val) {
                                                                            return val
                                                                        }
                                                                    }
                                                                }
                                                            }).render();
                                                        });
                                                    </script>
                                                    <!-- End Column Chart -->

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Subscription Details</h5>

                                                    <!-- Donut Chart -->
                                                    <div id="donutChart"></div>

                                                    <script>
                                                        document.addEventListener("DOMContentLoaded", () => {
                                                            new ApexCharts(document.querySelector("#donutChart"), {
                                                                series: [44, 55, 13, 43, 22, 25, 10],
                                                                chart: {
                                                                    height: 350,
                                                                    type: 'donut',
                                                                    // toolbar: {
                                                                    //     show: true
                                                                    // }
                                                                },
                                                                labels: ['Pro', 'Basic', 'Standard', 'Basic', 'Standard', 'Pro', 'Developer'],
                                                            }).render();
                                                        });
                                                    </script>
                                                    <!-- End Donut Chart -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-5">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body custom-card-body">
                                                    <h4 class="card-title">
                                                        Schools
                                                    </h4>
                                                    <div class="table-responsive"
                                                        style="max-height: 400px; overflow-y: auto;">
                                                        <table class="display nowrap table-bordered"
                                                            style="width: 100%; height: 350px">
                                                            <thead style="background-color: #003049; color: #f6f9ff;">
                                                                <tr>
                                                                    <th>Logo</th>
                                                                    <th>School</th>
                                                                    <th class="text-right">Admin</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @isset($schoolAdmins)
                                                                    @if ($schoolAdmins == null || $schoolAdmins->isEmpty())
                                                                        <tr>
                                                                            <td colspan="3">
                                                                                <center>No available data</center>
                                                                            </td>
                                                                        </tr>
                                                                    @else
                                                                        @foreach ($schoolAdmins as $schoolAdmin)
                                                                            <tr>
                                                                                <td>
                                                                                    <img src="../uploads/{{ $schoolAdmin->schoolLogo ? 'SchoolLogos/' . $schoolAdmin->schoolLogo : 'nopro/noprofile.jpg' }}"
                                                                                        onerror="onErrorImage(event)"
                                                                                        height="50px" width="100px"
                                                                                        class="me-2" alt="image">
                                                                                </td>
                                                                                <td>{{ $schoolAdmin->schoolName }}</td>
                                                                                <td class="text-right">
                                                                                    {{ $schoolAdmin->adminName }}</td>
                                                                            </tr>
                                                                        @endforeach
                                                                    @endif
                                                                @endisset

                                                                <tr>
                                                                    <td>
                                                                        <img src="https://eschool-saas.wrteam.me/assets/no_image_available.jpg"
                                                                            onerror="onErrorImage(event)" height="50px"
                                                                            width="100px" class="me-2" alt="image">
                                                                    </td>
                                                                    <td>Shams Tabraiz</td>
                                                                    <td class="text-right">Shams Tabraiz</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="https://eschool-saas.wrteam.me/assets/no_image_available.jpg"
                                                                            onerror="onErrorImage(event)" height="50px"
                                                                            width="100px" class="me-2" alt="image">
                                                                    </td>
                                                                    <td>dsvfsdfv</td>
                                                                    <td class="text-right">dfvdsf dvdfvs</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="https://eschool-saas.wrteam.me/assets/no_image_available.jpg"
                                                                            onerror="onErrorImage(event)" height="50px"
                                                                            width="100px" class="me-2" alt="image">
                                                                    </td>
                                                                    <td>School 28</td>
                                                                    <td class="text-right">Zar Gul</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="https://eschool-saas.wrteam.me/assets/no_image_available.jpg"
                                                                            onerror="onErrorImage(event)" height="50px"
                                                                            width="100px" class="me-2" alt="image">
                                                                    </td>
                                                                    <td>Premium NFT 💫</td>
                                                                    <td class="text-right">Test Bro</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="https://eschool-saas.wrteam.me/assets/no_image_available.jpg"
                                                                            onerror="onErrorImage(event)" height="50px"
                                                                            width="100px" class="me-2" alt="image">
                                                                    </td>
                                                                    <td>Jyoti Public School</td>
                                                                    <td class="text-right">rajnish kumawat</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="https://eschool-saas.wrteam.me/assets/no_image_available.jpg"
                                                                            onerror="onErrorImage(event)" height="50px"
                                                                            width="100px" class="me-2" alt="image">
                                                                    </td>
                                                                    <td>test</td>
                                                                    <td class="text-right">First Name Last Name</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="https://eschool-saas.wrteam.me/assets/no_image_available.jpg"
                                                                            onerror="onErrorImage(event)" height="50px"
                                                                            width="100px" class="me-2" alt="image">
                                                                    </td>
                                                                    <td>Xyz</td>
                                                                    <td class="text-right">Zhkk Vl</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="https://eschool-saas.wrteam.me/assets/no_image_available.jpg"
                                                                            onerror="onErrorImage(event)" height="50px"
                                                                            width="100px" class="me-2" alt="image">
                                                                    </td>
                                                                    <td>Solid Foundation</td>
                                                                    <td class="text-right">Bukola Akano</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="https://eschool-saas.wrteam.me/assets/no_image_available.jpg"
                                                                            onerror="onErrorImage(event)" height="50px"
                                                                            width="100px" class="me-2" alt="image">
                                                                    </td>
                                                                    <td>bookfield Academy</td>
                                                                    <td class="text-right">kan ken</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="https://eschool-saas.wrteam.me/assets/no_image_available.jpg"
                                                                            onerror="onErrorImage(event)" height="50px"
                                                                            width="100px" class="me-2" alt="image">
                                                                    </td>
                                                                    <td>HW</td>
                                                                    <td class="text-right">Peter Gao</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="https://eschool-saas.wrteam.me/assets/no_image_available.jpg"
                                                                            onerror="onErrorImage(event)" height="50px"
                                                                            width="100px" class="me-2" alt="image">
                                                                    </td>
                                                                    <td>GibsonX Farms Ltd</td>
                                                                    <td class="text-right">GibsonX Ltd</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="https://eschool-saas.wrteam.me/assets/no_image_available.jpg"
                                                                            onerror="onErrorImage(event)" height="50px"
                                                                            width="100px" class="me-2" alt="image">
                                                                    </td>
                                                                    <td>Dean Garlus</td>
                                                                    <td class="text-right">Dean Garlus</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="https://eschool-saas.wrteam.me/assets/no_image_available.jpg"
                                                                            onerror="onErrorImage(event)" height="50px"
                                                                            width="100px" class="me-2" alt="image">
                                                                    </td>
                                                                    <td>SMVPS</td>
                                                                    <td class="text-right">Amrendra Singh</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="https://eschool-saas.wrteam.me/assets/no_image_available.jpg"
                                                                            onerror="onErrorImage(event)" height="50px"
                                                                            width="100px" class="me-2" alt="image">
                                                                    </td>
                                                                    <td>herry last</td>
                                                                    <td class="text-right">Hardik demo</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="https://eschool-saas.wrteam.me/assets/no_image_available.jpg"
                                                                            onerror="onErrorImage(event)" height="50px"
                                                                            width="100px" class="me-2" alt="image">
                                                                    </td>
                                                                    <td>GTECH</td>
                                                                    <td class="text-right">Che Nsoh Blanchard</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="https://eschool-saas.wrteam.me/assets/no_image_available.jpg"
                                                                            onerror="onErrorImage(event)" height="50px"
                                                                            width="100px" class="me-2" alt="image">
                                                                    </td>
                                                                    <td>Prodipti Pathshala</td>
                                                                    <td class="text-right">Monotosh Biswas</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="https://eschool-saas.wrteam.me/assets/no_image_available.jpg"
                                                                            onerror="onErrorImage(event)" height="50px"
                                                                            width="100px" class="me-2" alt="image">
                                                                    </td>
                                                                    <td>Antoni Gomez</td>
                                                                    <td class="text-right">antoni gomez ramirez</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="https://eschool-saas.wrteam.me/assets/no_image_available.jpg"
                                                                            onerror="onErrorImage(event)" height="50px"
                                                                            width="100px" class="me-2" alt="image">
                                                                    </td>
                                                                    <td>Antoni Gomez</td>
                                                                    <td class="text-right">antoni gomez ramirez</td>
                                                                </tr>
                                                                {{-- <tr>
                                                                <td>
                                                                    <img src="https://eschool-saas.wrteam.me/assets/no_image_available.jpg"
                                                                        onerror="onErrorImage(event)"
                                                                        height="50px" width="100px"
                                                                        class="me-2" alt="image">
                                                                </td>
                                                                <td>Formula</td>
                                                                <td class="text-right">Dipankar Kumar</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="https://eschool-saas.wrteam.me/assets/no_image_available.jpg"
                                                                        onerror="onErrorImage(event)"
                                                                        height="50px" width="100px"
                                                                        class="me-2" alt="image">
                                                                </td>
                                                                <td>Najm Alyuosofi</td>
                                                                <td class="text-right">Najm Alyuosofi</td>
                                                            </tr> --}}

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body custom-card-body">
                                                    <h4 class="card-title">
                                                        Staff Details
                                                    </h4>
                                                    <div class="table-responsive"
                                                        style="max-height: 400px; overflow-y: auto;">
                                                        <table class="display nowrap table-bordered"
                                                            style="width: 100%; height: 350px">
                                                            <thead style="background-color: #003049; color: #f6f9ff;">
                                                                <tr>
                                                                    <th>Photo</th>
                                                                    <th>Name</th>
                                                                    <th>Roles</th>
                                                                    <th class="text-right">Assign Schools</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @isset($staffs)
                                                                    @if ($staffs == null || $staffs->isEmpty())
                                                                        <tr>
                                                                            <td colspan="4">No available data</td>
                                                                        </tr>
                                                                    @else
                                                                        @foreach ($staffs as $staff)
                                                                            <tr>
                                                                                <td>
                                                                                    <img src="../uploads/{{ $staff->staffImage ? 'Staff/' . $staff->staffImage : 'nopro/noprofile.jpg' }}"
                                                                                        onerror="onErrorImage(event)"
                                                                                        height="40px" width="90px"
                                                                                        class="me-2" alt="image">
                                                                                </td>
                                                                                <td>{{ $staff->staffName }}</td>
                                                                                <td>{{ $staff->roleName }}</td>
                                                                                <td>{{ $staff->schoolName }}</td>
                                                                            </tr>
                                                                        @endforeach
                                                                    @endif
                                                                @endisset

                                                                {{-- <tr>
                                                                <td>
                                                                    <img src="https://eschool-saas.wrteam.me/storage/user/6561c8820ab183.426030691700907138.jpg"
                                                                        onerror="onErrorImage(event)" height="40px"
                                                                        width="90px" class="me-2"
                                                                        alt="image">
                                                                </td>
                                                                <td>Staff Demo</td>
                                                                <td>Staff</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="https://eschool-saas.wrteam.me/storage/user/6561c878338f39.751924501700907128.jpg"
                                                                        onerror="onErrorImage(event)"
                                                                        height="40px" width="90px"
                                                                        class="me-2" alt="image">
                                                                </td>
                                                                <td>Mahesh Kerai</td>
                                                                <td>Admin</td>
                                                                <td></td>
                                                            </tr> --}}
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                {{-- <div class="col-lg-12">
                                <div class="card">

                                    <div class="filter">
                                        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">This Year</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title">Addon</h5>

                                        <!-- Line Chart -->
                                        <div id="AddonChart" style="min-height: 400px;" class="echart">
                                        </div>

                                        <script>
                                            document.addEventListener("DOMContentLoaded", () => {
                                                echarts.init(document.querySelector("#AddonChart")).setOption({
                                                    xAxis: {
                                                        type: 'category',
                                                        data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov',
                                                            'Dec'
                                                        ]


                                                    },
                                                    yAxis: {
                                                        type: 'value'
                                                    },
                                                    series: [{
                                                        data: [0.00, 5.50, 0.00, 0.00, 10.50, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00],
                                                        type: 'bar'
                                                    }]
                                                });
                                            });
                                        </script>
                                        <!-- End Line Chart -->

                                    </div>

                                </div>
                            </div> --}}
                                {{-- <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <h4 class="card-title">
                                                    Addon
                                                </h4>
                                            </div>

                                        </div>
                                        <div id="columnChartAddon"></div>

                                        <script>
                                            document.addEventListener("DOMContentLoaded", () => {
                                                new ApexCharts(document.querySelector("#columnChartAddon"), {
                                                    series: [{
                                                        name: 'No.',
                                                        data: [0, 2, 0, 0, 1, 0, 0, 0, 0, 1]
                                                    }],
                                                    chart: {
                                                        type: 'bar',
                                                        height: 350
                                                    },
                                                    plotOptions: {
                                                        bar: {
                                                            horizontal: false,
                                                            columnWidth: '55%',
                                                            endingShape: 'rounded'
                                                        },
                                                    },
                                                    dataLabels: {
                                                        enabled: false
                                                    },
                                                    stroke: {
                                                        show: true,
                                                        width: 2,
                                                        colors: ['transparent']
                                                    },
                                                    xaxis: {
                                                        categories: ['TimeTable', 'Attendance', 'Staff', 'Expense', 'School Gallery', 'Fees',
                                                            'Staff Leaves', 'Lesson', 'Exam', 'Website'
                                                        ],
                                                    },
                                                    fill: {
                                                        opacity: 1
                                                    },
                                                    tooltip: {
                                                        y: {
                                                            formatter: function(val) {
                                                                return val
                                                            }
                                                        }
                                                    }
                                                }).render();
                                            });
                                        </script>

                                    </div>
                                </div>
                            </div> --}}
                            </div>
                        </section>

                        {{-- <div class="col-lg-12">

                        <div class="card">
                            <div class="card-header" style="background: #003049 ;">
                                <h4 class=" p-0 card-title d-flex align-items-center justify-content-between"
                                    style="color:#f6f9ff">List Pending Bills
                                </h4>
                            </div>
                        </div>


                        <div class="card-body">


                            <!-- Table with stripped rows -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>No.</th>
                                        <th>Logo</th>
                                        <th>School Name</th>
                                        <th>Plan</th>
                                        <th>Bill Date</th>
                                        <th>Bill Amount($)</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td><img src="{{ url('/') }}/assets/super_admin/img/Saas-logo2.jpg"
                                                alt="" height="50px" width="150px"></td>
                                        <td>Maple Grove High School</td>
                                        <td>Pro 07-11-2023 - 06-12-2023</td>
                                        <td>05-02-2024</td>
                                        <td>5.50</td>
                                        <td width="150px"><span class="btn btn-danger">Over Due</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                        <div class="card-footer" style="background: #003049 ;">
                        </div>
                    </div> --}}
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection

@push('js')
@endpush
