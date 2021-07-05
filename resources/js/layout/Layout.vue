<template>
    <main>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#">Contact App</a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a
                                    class="nav-link active"
                                    aria-current="page"
                                    href="/"
                                    >Home</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contacts"
                                    >Contacts</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <article class="container mt-2">
            <slot />
        </article>
    </main>
</template>

<script>
// import Boostrap from 'bootstrap'
export default {
    props: {
        title: String
    },
    watch: {
        title: {
            immediate: true,
            handler(title) {
                document.title = title;
            }
        }
    }
};
</script>
