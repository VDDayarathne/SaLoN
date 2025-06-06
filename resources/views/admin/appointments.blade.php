<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Appointments</title>
    <style type="text/css">
        body {
            background: #18181b;
        }
        table {
            border: 2px solid #fff;
            text-align: center;
            background: #232323;
            border-radius: 10px;
            overflow: hidden;
        }
        th {
            background-color: #323131;
            padding: 12px 16px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            color: #fff;
        }
        .table_center {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            margin-top: 40px;
        }
        td {
            color: #fff;
            padding: 10px 14px;
            border: 1px solid #fff;
            font-size: 16px;
        }
        .status-confirmed {
            color: #22c55e;
            font-weight: bold;
        }
        .status-pending {
            color: #eab308;
            font-weight: bold;
        }
        .status-cancelled, .status-rejected {
            color: #ef4444;
            font-weight: bold;
        }
        .status-other {
            color: #60a5fa;
            font-weight: bold;
        }
        .admin-title {
            color: #fff;
            font-weight: 700;
            text-align: center;
            margin-bottom: 30px;
            margin-top: 30px;
            font-size: 2rem;
            letter-spacing: 1px;
        }
        @media (max-width: 900px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }
            th, td {
                padding: 10px 8px;
            }
            .table_center {
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="admin-title">All Appointments</div>
                <div class="table_center">
                    <table>
                        <tr>
                            <th>User</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            {{-- Add more columns here if needed --}}
                        </tr>
                        @forelse($appointments as $apt)
                            <tr>
                                <td>{{ $apt->user->name ?? 'N/A' }}</td>
                                <td>{{ \Carbon\Carbon::parse($apt->appointment_date)->format('d M Y') }}</td>
                                <td>{{ $apt->start_time }} - {{ $apt->end_time }}</td>
                                <td>
                                    @php
                                        $status = strtolower($apt->status ?? 'other');
                                    @endphp
                                    @if($status === 'confirmed')
                                        <span class="status-confirmed">{{ ucfirst($apt->status) }}</span>
                                    @elseif($status === 'pending')
                                        <span class="status-pending">{{ ucfirst($apt->status) }}</span>
                                    @elseif($status === 'cancelled' || $status === 'rejected')
                                        <span class="status-cancelled">{{ ucfirst($apt->status) }}</span>
                                    @else
                                        <span class="status-other">{{ ucfirst($apt->status ?? 'Other') }}</span>
                                    @endif
                                </td>
                                {{-- Add more <td> for actions/links if needed --}}
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" style="color:#aaa; text-align:center;">No appointments found.</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.js')
</body>
</html>
