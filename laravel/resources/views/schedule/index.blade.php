<!-- タスク一覧表示 -->
@if (count($schedules) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        テスト１
    </div>
 
    <div class="panel-body">
        <table class="table table-striped schedule-table">
 
            <!-- テーブルヘッダ -->
            <thead>
                <th>テスト2</th>
                <th>&nbsp;</th>
            </thead>
 
            <!-- テーブル本体 -->
            <tbody>
                @foreach ($schedules as $schedule)
                <tr>
                    <!-- タスク名 -->
                    <td class="table-text">
                    </td>
 
                    <td>
                        <!-- TODO: 削除ボタン -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif