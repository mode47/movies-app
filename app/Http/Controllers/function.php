  <?php
  function getTypeUrl($item)
    {
        return $item['type'] === 'movie' ? '/movies/' . $item['id'] : '/shows/' . $item['id'];
    }

    function getTypeLink($item)
    {
        return $item['type'] === 'movie' ? 'https://movies.andredemos.ca/movies/' . $item['id'] : 'https://movies.andredemos.ca/shows/' . $item['id'];
    }

    function getItemTitle($item)
    {
        return $item['type'] === 'movie' ? $item['title'] : $item['name'];
    }

    function getItemRating($item)
    {
        return $item['vote_average'] * 10 . '100';
    }

    function getTypeDate($item)
    {
        return $item['type'] === 'movie' ? $item['release_date'] : $item['first_air_date'];
    }