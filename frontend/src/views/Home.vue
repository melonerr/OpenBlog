<template>
  <div id="Home">
    <main class="content">
      <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
          <div class="col-auto d-none d-sm-block">
            <h3><b>Dashboard</b></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12 col-xxl-12 d-flex">
            <div class="w-100">
              <div class="row">
                <div class="col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title mb-4">All Page</h5>
                      <h1 class="mt-1 mb-3">8</h1>
                      <div class="mb-1">
                        <span class="text-success">
                          <i class="mdi mdi-arrow-bottom-right"></i> 3.65%
                        </span>
                        <span class="text-muted">Since last week</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title mb-4">Page View <small>(30 day)</small></h5>
                      <h1 class="mt-1 mb-3">251</h1>
                      <div class="mb-1">
                        <span class="text-success">
                          <i class="mdi mdi-arrow-bottom-right"></i> 6.65%
                        </span>
                        <span class="text-muted">than 7 days ago</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title mb-4">Visitors <small>(30 day)</small></h5>
                      <h1 class="mt-1 mb-3">84</h1>
                      <div class="mb-1">
                        <span class="text-success">
                          <i class="mdi mdi-arrow-bottom-right"></i> 5.25%
                        </span>
                        <span class="text-muted">than 7 days ago</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title mb-4">
                        First Time Visitors <small>(30 day)</small>
                      </h5>
                      <h1 class="mt-1 mb-3">64</h1>
                      <div class="mb-1">
                        <span class="text-danger">
                          <i class="mdi mdi-arrow-bottom-right"></i> -2.25%
                        </span>
                        <span class="text-muted">than 7 days ago</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-12 col-xxl-12">
            <div class="card flex-fill w-100">
              <!-- <div class="card-header">
                <h5 class="card-title mb-0">Visitors</h5>
              </div> -->
              <div class="card-body py-3">
                <div class="chart chart-sm">
                  <MultiColumn></MultiColumn>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 col-xxl-4 d-flex">
            <div class="card flex-fill w-100">
              <div class="card-body d-flex">
                <div class="align-self-center w-100">
                  <div class="chart chart-xs">
                    <PieChart></PieChart>
                  </div>

                  <table class="table mb-0">
                    <tbody>
                      <tr>
                        <td>Chrome</td>
                        <td class="text-right">510</td>
                      </tr>
                      <tr>
                        <td>Unknown</td>
                        <td class="text-right">452</td>
                      </tr>
                      <tr>
                        <td>Firefox</td>
                        <td class="text-right">201</td>
                      </tr>
                      <tr>
                        <td>IE</td>
                        <td class="text-right">124</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xxl-4 d-flex">
            <div class="card flex-fill w-100">
              <div class="card-header">
                <h5 class="card-title mb-0">Thailand</h5>
              </div>
              <div class="card-body px-4 pt-0">
                <div id="thailand-map" class="text-center" style="height: 80%">
                  <img src="../assets/img/map/th-all.svg" id="map-svg" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xxl-4 d-flex">
            <div class="card flex-fill">
              <div class="card-header">
                <h5 class="card-title mb-0">Top 10 country</h5>
              </div>
              <div class="card-body d-flex pt-0">
                <div class="align-self-center w-100">
                  <table class="table mb-0 mt-0">
                    <tbody>
                      <tr>
                        <td>Thailand</td>
                        <td class="text-right">211</td>
                      </tr>
                      <tr>
                        <td>United States</td>
                        <td class="text-right">195</td>
                      </tr>
                      <tr>
                        <td>Russia</td>
                        <td class="text-right">125</td>
                      </tr>
                      <tr>
                        <td>Japan</td>
                        <td class="text-right">110</td>
                      </tr>
                      <tr>
                        <td>Poland</td>
                        <td class="text-right">95</td>
                      </tr>
                      <tr>
                        <td>France</td>
                        <td class="text-right">83</td>
                      </tr>
                      <tr>
                        <td>Finland</td>
                        <td class="text-right">62</td>
                      </tr>
                      <tr>
                        <td>Iceland</td>
                        <td class="text-right">60</td>
                      </tr>
                      <tr>
                        <td>Greece</td>
                        <td class="text-right">52</td>
                      </tr>
                      <tr>
                        <td>Greenland</td>
                        <td class="text-right">51</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
              <div class="card-header">
                <h5 class="card-title mb-0">Top 10</h5>
              </div>
              <table class="table table-hover my-0">
                <thead>
                  <tr>
                    <th width="40%" class="text-center">Blog Name</th>
                    <th width="15%" class="text-center d-none d-xl-table-cell">
                      Published
                    </th>
                    <th width="15%" class="text-center d-none d-xl-table-cell">
                      Page View
                    </th>
                    <th width="10%" class="text-center">Status</th>
                    <th width="20%" class="text-center d-none d-md-table-cell">
                      Categories
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Project Apollo</td>
                    <td class="d-none d-xl-table-cell text-center">01/01/2020</td>
                    <td class="d-none d-xl-table-cell text-center">54</td>
                    <td>
                      <span class="badge bg-success text-center">Done</span>
                    </td>
                    <td class="d-none d-md-table-cell text-center">Vanessa Tucker</td>
                  </tr>
                  <tr>
                    <td>Project Fireball</td>
                    <td class="d-none d-xl-table-cell text-center">01/01/2020</td>
                    <td class="d-none d-xl-table-cell text-center">42</td>
                    <td>
                      <span class="badge bg-danger text-center">Cancelled</span>
                    </td>
                    <td class="d-none d-md-table-cell text-center">William Harris</td>
                  </tr>
                  <tr>
                    <td>Project Hades</td>
                    <td class="d-none d-xl-table-cell text-center">01/01/2020</td>
                    <td class="d-none d-xl-table-cell text-center">31</td>
                    <td>
                      <span class="badge bg-success text-center">Done</span>
                    </td>
                    <td class="d-none d-md-table-cell text-center">Sharon Lessman</td>
                  </tr>
                  <tr>
                    <td>Project Nitro</td>
                    <td class="d-none d-xl-table-cell text-center">01/01/2020</td>
                    <td class="d-none d-xl-table-cell text-center">30</td>
                    <td>
                      <span class="badge bg-warning text-center">In progress</span>
                    </td>
                    <td class="d-none d-md-table-cell text-center">Vanessa Tucker</td>
                  </tr>
                  <tr>
                    <td>Project Phoenix</td>
                    <td class="d-none d-xl-table-cell text-center">01/01/2020</td>
                    <td class="d-none d-xl-table-cell text-center">27</td>
                    <td>
                      <span class="badge bg-success text-center">Done</span>
                    </td>
                    <td class="d-none d-md-table-cell text-center">William Harris</td>
                  </tr>
                  <tr>
                    <td>Project X</td>
                    <td class="d-none d-xl-table-cell text-center">01/01/2020</td>
                    <td class="d-none d-xl-table-cell text-center">26</td>
                    <td>
                      <span class="badge bg-success text-center">Done</span>
                    </td>
                    <td class="d-none d-md-table-cell text-center">Sharon Lessman</td>
                  </tr>
                  <tr>
                    <td>Project Romeo</td>
                    <td class="d-none d-xl-table-cell text-center">01/01/2020</td>
                    <td class="d-none d-xl-table-cell text-center">22</td>
                    <td>
                      <span class="badge bg-success text-center">Done</span>
                    </td>
                    <td class="d-none d-md-table-cell text-center">Christina Mason</td>
                  </tr>
                  <tr>
                    <td>Project Wombat</td>
                    <td class="d-none d-xl-table-cell text-center">01/01/2020</td>
                    <td class="d-none d-xl-table-cell text-center">21</td>
                    <td>
                      <span class="badge bg-warning text-center">In progress</span>
                    </td>
                    <td class="d-none d-md-table-cell text-center">William Harris</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</template>
<script>
// Chart
import MultiColumn from "../components/chart/MultiColumn.vue";
import PieChart from "../components/chart/PieChart.vue";
export default {
  name: "Home",
  components: {
    MultiColumn,
    PieChart,
  },
  data() {
    return {
      myHtmlCode: "<b>123456789</b>",
    };
  },
  mounted() {},
};
</script>
<style>
#map-svg {
  width: 80%;
  text-align: center;
}
#admin1 > path:hover {
  fill: #69a4d8;
  cursor: pointer;
}
</style>
