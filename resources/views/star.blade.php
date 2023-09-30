<style>
    .rating {
        font-size: 20px;
    }

    .star {
        color: #ccc;
        cursor: pointer;
    }

    .star.filled {
        color: #fdd835;
    }
</style>
<div class="rating">
    @for ($i = 1; $i <= 5; $i++)
        @if ($i <= $rating)
            <span class="star filled">&#9733;</span>
        @else
            <span class="star">&#9733;</span>
        @endif
    @endfor
</div>
