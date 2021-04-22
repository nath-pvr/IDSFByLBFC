<div class="container">
    <div class="row">
        <form class="d-flex mt-3 col-lg-6" action="<?= esc_url(home_url('/')) ?>">
            <input class="form-control me-2 search-bar rounded-pill" type="search" name="s" placeholder="Rechercher" aria-label="Search" value="<?= get_search_query() ?>">
            <button class="btn btn-gold" type="submit">Rechercher</button>
        </form>
    </div>
</div>