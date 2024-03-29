<?=$this->section_start('css') ?>
  <link rel="stylesheet" href="/assets/css/list.css" />
<?=$this->section_end() ?>

<?=$this->section_start('scripts') ?>
  <script src="/assets/js/showDescription.js"></script>
<?=$this->section_end() ?>

<div class="container">
  <div class="list_table">
    <div class="list_header">
      <p class="list_header-date">Release Date</p>
      <p class="list_header-title">Title<p>
    </div>

    <!-- <div class="list_body">
      <div class="list_body-line">
        <div class="list_body-line_one" onclick="showDescription(this)">
          <p class="list_body-date">Data</p>
          <p class="list_body-title">Título</p>
        </div>
        <div class="list_body-line_two">
          <div class="list_body-description">
            <div class="list_body-image">
              <img src=""/>
            </div>
            <p class="list_body-text">Description</p>
          </div>
        </div>
      </div> -->

      <div class="list_body-line_default"><p>...</p></div>
    </div>
  </div>
</div>
