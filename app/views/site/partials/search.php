<?=$this->section_start('css') ?>
  <link rel="stylesheet" href="/assets/css/search.css" />
<?=$this->section_end() ?>

<form method="post" action="/search" id="search-form">
  <div class="search">
    <button type="submit" form="search-form"><i class="fa-solid fa-magnifying-glass"></i></button>
    <input type="search" name="search" value="<?php echo old('search'); ?>"/>
  </div>
  
  <div class="filter">
    <div class="filter_wrapper">
      <h2>Mídia</h2>

      <div class="filter_wrapper-single">
        <input type="checkbox" id="comics" name="media[]" value="comic" />
        <label for="comics">comics</label>
      </div>

      <div class="filter_wrapper-single">
        <input type="checkbox" id="games" name="media[]" value="game" />
        <label for="games">games</label>
      </div>

      <div class="filter_wrapper-single">
        <input type="checkbox" id="movies" name="media[]" value="movie" />
        <label for="movies">movies</label>
      </div>

      <div class="filter_wrapper-single">
        <input type="checkbox" id="series" name="media[]" value="serie" />
        <label for="series">series</label>
      </div>
    </div>

    <div class="filter_wrapper">
      <h2>Categoria</h2>

      <div class="filter_wrapper-single">
        <select name="category" id="category">
          <option value=""></option>
        </select>
      </div>

      <?php echo flash('media'); ?>
      <?php echo flash('category'); ?>
      <?php echo flash('search'); ?>
    </div>

    <div class="filter_wrapper">
      <h2>Ordem</h2>
      
      <div class="filter_wrapper-single">
        <input type="radio" id="any-order" name="order" value="any-order" />
        <label for="any-order">any order</label>
      </div>

      <div class="filter_wrapper-single">
        <input type="radio" id="release-order" name="order" value="release-order" />
        <label for="release-order">release order</label>
      </div>

      <div class="filter_wrapper-single">
        <input type="radio" id="chronological-order" name="order" value="chronological-order" />
        <label for="chronological-order">chronological order</label>
      </div>
    </div>
  </div>
</form>
