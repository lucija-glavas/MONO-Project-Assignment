<?php
  $lang = 'en';
  require_once 'php/global.php';
?>

<!DOCTYPE html>
<html lang="<?php print $lang; ?>">

<head>
  <?php
    $page_title = 'Home';
    require_once 'php/elements/head.php';
  ?>
</head>

<body class="home">

<?php require_once 'php/elements/header.php'; ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="hero_header">
        <div class="hero_header_inner">
          <h1 class="hero_title"><?php print $site_title; ?></h1>
          <h4 class="hero_subtitle mb-3"><?php print $site_tagline; ?></h4>
          <a href="<?php print $base_url; ?>" class="btn btn-info icon_right">Check Stats<i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>

<section id="infos" class="page_section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 info_box">
        <div class="info_box_inner">
          <div class="icon_holder">
            <i class="fas fa-tint color_error"></i>
          </div>
          <div class="content_holder">
            <h4 class="info_box_title">Crude Production</h4>
            <h2 class="info_box_value mb-2">93,000<span class="unit">TBpD</span></h2>
            <button class="btn btn-danger btn-sm icon_left"><i class="fas fa-caret-down"></i>15%</button>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 info_box">
        <div class="info_box_inner">
          <div class="icon_holder">
            <i class="fas fa-fire-alt color_success"></i>
          </div>
          <div class="content_holder">
            <h4 class="info_box_title">Natural Gas</h4>
            <h2 class="info_box_value mb-2">2.7<span class="unit">BCF</span></h2>
            <button class="btn btn-success btn-sm icon_left"><i class="fas fa-caret-up"></i>36%</button>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 info_box">
        <div class="info_box_inner">
          <div class="icon_holder">
            <i class="fas fa-gas-pump color_error"></i>
          </div>
          <div class="content_holder">
            <h4 class="info_box_title">Gasoline Price</h4>
            <h2 class="info_box_value mb-2">2.2<span class="unit">EUR/L</span></h2>
            <button class="btn btn-danger btn-sm icon_left"><i class="fas fa-caret-down"></i>36%</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="table1" class="page_section pt-0">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="table_title_box">
          <h3 class="table_title color_success">Top 3 Sellers</h3>
          <div class="table_filters">
            <button class="btn btn-outline-secondary table_filter filter_crude active"><i class="fas fa-tint"></i></button>
            <button class="btn btn-outline-secondary table_filter filter_ngas"><i class="fas fa-fire-alt"></i></button>
            <button class="btn btn-outline-secondary table_filter filter_gasoline"><i class="fas fa-gas-pump"></i></button>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered table_with_title_box">
            <thead>
              <tr>
                <th colspan="2">Name</th>
                <th>Sales</th>
                <th>Target</th>
                <th>KPI</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="product_number">1</td>
                <td class="product_info">
                  <strong class="product_name">Luoil</strong>
                  <span class="product_link"><a href="<?php print $base_url; ?>">View Details</a></span>
                </td>
                <td>528</td>
                <td>420</td>
                <td>
                  <span class="value color_success">126</span><span class="unit">%</span>
                </td>
                <td>
                  <span class="value">2.2</span><span class="unit">EUR/L</span>
                </td>
              </tr>
              <tr>
                <td class="product_number">2</td>
                <td class="product_info">
                  <strong class="product_name">Luoil Eco</strong>
                  <span class="product_link"><a href="<?php print $base_url; ?>">View Details</a></span>
                </td>
                <td>528</td>
                <td>420</td>
                <td>
                  <span class="value color_success">126</span><span class="unit">%</span>
                </td>
                <td>
                  <span class="value">2.2</span><span class="unit">EUR/L</span>
                </td>
              </tr>
              <tr>
                <td class="product_number">3</td>
                <td class="product_info">
                  <strong class="product_name">Luoil Bio</strong>
                  <span class="product_link"><a href="<?php print $base_url; ?>">View Details</a></span>
                </td>
                <td>528</td>
                <td>420</td>
                <td>
                  <span class="value color_success">126</span><span class="unit">%</span>
                </td>
                <td>
                  <span class="value">2.2</span>  <span class="unit">EUR/L</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="table2" class="page_section pt-0">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="table_title_box">
          <h3 class="table_title color_error">Least 3 Sellers</h3>
          <div class="table_filters">
            <button class="btn btn-outline-secondary table_filter filter_crude active"><i class="fas fa-tint"></i></button>
            <button class="btn btn-outline-secondary table_filter filter_ngas"><i class="fas fa-fire-alt"></i></button>
            <button class="btn btn-outline-secondary table_filter filter_gasoline"><i class="fas fa-gas-pump"></i></button>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered table_with_title_box">
            <thead>
              <tr>
                <th colspan="2">Name</th>
                <th>Sales</th>
                <th>Target</th>
                <th>KPI</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="product_number">1</td>
                <td class="product_info">
                  <strong class="product_name">Lu Petro</strong>
                  <span class="product_link"><a href="<?php print $base_url; ?>">View Details</a></span>
                </td>
                <td>393</td>
                <td>418</td>
                <td>
                  <span class="value color_error">94</span><span class="unit">%</span>
                </td>
                <td>
                  <span class="value">2.2</span><span class="unit">EUR/L</span>
                </td>
              </tr>
              <tr>
                <td class="product_number">2</td>
                <td class="product_info">
                  <strong class="product_name">Lu Petro Plus</strong>
                  <span class="product_link"><a href="<?php print $base_url; ?>">View Details</a></span>
                </td>
                <td>393</td>
                <td>418</td>
                <td>
                  <span class="value color_error">94</span><span class="unit">%</span>
                </td>
                <td>
                  <span class="value">2.2</span><span class="unit">EUR/L</span>
                </td>
              </tr>
              <tr>
                <td class="product_number">3</td>
                <td class="product_info">
                  <strong class="product_name">Lugas</strong>
                  <span class="product_link"><a href="<?php print $base_url; ?>">View Details</a></span>
                </td>
                <td>393</td>
                <td>418</td>
                <td>
                  <span class="value color_error">94</span><span class="unit">%</span>
                </td>
                <td>
                  <span class="value">2.2</span>  <span class="unit">EUR/L</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="stations" class="page_section pt-0">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <h3 class="section_title mb-3">Stations and Total Revenues</h3>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="map_holder mb-3">
          <img src="<?php print $base_url; ?>img/bg/map.png" alt="<?php print $site_title; ?>">
          <div class="map_overlay">
            <div class="map_point map_point_1">
              <div class="map_point_info map_point_info_1">
                <h5 class="mb-3">Germany</h5>
                <p class="mb-0">Total Stations: 1001</p>
                <p class="mb-3">Total Revenue: 0.11 bn</p>
                <a href="<?php print $base_url; ?>">View Details</a>
              </div>
            </div>
            <div class="map_point map_point_2">
              <div class="map_point_info map_point_info_2">
                <h5 class="mb-3">Spain</h5>
                <p class="mb-0">Total Stations: 600</p>
                <p class="mb-3">Total Revenue: 0.11 bn</p>
                <a href="<?php print $base_url; ?>">View Details</a>
              </div>
            </div>
            <div class="map_point map_point_3">
              <div class="map_point_info map_point_info_3">
                <h5 class="mb-3">Turkey</h5>
                <p class="mb-0">Total Stations: 50</p>
                <p class="mb-3">Total Revenue: 0.11 bn</p>
                <a href="<?php print $base_url; ?>">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 map_legend">
        <div class="map_legend_inner">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item color_primary_text"><strong>STATION COUNT</strong></li>
            <li class="list-inline-item color_accent">> 1000</li>
            <li class="list-inline-item color_primary_light">500 - 900</li>
            <li class="list-inline-item color_primary">< 500</li>
          </ul>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 map_filters">
        <div class="map_filters_inner">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item"><a href="#">North America</a></li>
            <li class="list-inline-item"><a href="#">South America</a></li>
            <li class="list-inline-item"><a href="#" class="active">Europe</a></li>
            <li class="list-inline-item"><a href="#">Asia</a></li>
            <li class="list-inline-item"><a href="#">Africa</a></li>
            <li class="list-inline-item"><a href="#">Oceania</a></li>
            <li class="list-inline-item"><a href="#">Australia</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once 'php/elements/footer.php'; ?>
