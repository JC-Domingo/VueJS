<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.css">
        <style>body { padding-top: 40px; }</style>
    </head>

    <body>
        <div id="root" class="container">
            @include ('projects.list')

            <hr>

            <form method="POST" action="/projects" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
                <div class="field">
                    <label for="name" class="label">Project Name:</label>
                    <input type="text" id="name" name="name" class="input" v-model="form.name">
                    <p class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"><p>
                </div>

                <div class="field">
                    <label for="description" class="label">Project Description:</label>
                    <input type="text" id="description" name="description" class="input" v-model="form.description">
                    <p class="help is-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"><p>
                </div>

                <div class="field">
                    <button class="button is-primary" :disabled="form.errors.any()">Create</button>
                </div>
            </form>
        </div>

        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="/js/app.js"></script>
    </body>

</html>
