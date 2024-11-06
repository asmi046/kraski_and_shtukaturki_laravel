@if ($last_action)
    <div  id ="action_pop_up" class="action_pop_up">
        <div id="close_pop_up" class="close_pop_up"></div>
        <div class="img_wrapper">
            <img src="{{ $last_action->img }}" alt="{{ $last_action->title }}">
        </div>
        <div class="text">
            {{ $last_action->title }}
            <br>
            <br>
            <a href="{{ route('blog_page', $last_action->slug)}}" class="card-popular__btn">Подробнее...</span>
        </div>
    </div>

    <script>
        const id_action = {{ $last_action->id }}

        const show_pop_up = () => action_pop_up.classList.add('showed')
        const close_pop_up = () => {
            localStorage.setItem("last_showed_action", id_action);
            action_pop_up.classList.remove('showed')
        }

        document.addEventListener('DOMContentLoaded', () => {
            let main_action =  localStorage.getItem("last_showed_action")

            if (main_action != id_action)
                setTimeout(show_pop_up, 2000);

                document.getElementById('close_pop_up').onclick = close_pop_up
        })
    </script>
@endif
