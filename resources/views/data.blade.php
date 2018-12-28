<p><a href="export"><button>Export Data ke Excel</button></a></p>
<table border="1" cellpadding="10">
  <tr>
    <th>Tahun-Semester</th>
    <th>Sistem Informasi</th>
    <th>Sistem Komputer</th>
  </tr>
  @for ($year = 2008; $year < 2018; $year++)
  @for ($semester = 1; $semester < 3; $semester++)
  <tr>
      <td>{{$year}}-{{$semester}}</td>
      <td>{{$c[$semester][$year][0]->jumlah}}</td>
      <td>{{$b[$semester][$year][0]->jumlah}}</td>
  </tr>
  @endfor
  @endfor
</table>
