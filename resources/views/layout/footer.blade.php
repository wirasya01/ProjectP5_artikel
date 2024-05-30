<footer class="text-muted py-5 bg-dark text-white">
    <div class="container">
        <p class="float-end mb-1">
            <a href="#" class="text-white text-decoration-none">Kembali Ke Atas</a>
        </p>
        <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p class="mb-0">New to Bootstrap?
            <a href="/" class="text-white text-decoration-none">Visit the homepage</a>
            or read our
            <a href="/docs/5.0/getting-started/introduction/" class="text-white text-decoration-none">getting started guide</a>.
        </p>
    </div>
</footer>

<style>
    footer {
        background-color: #343a40; /* Dark background */
        color: #f8f9fa; /* Light text */
    }

    footer a {
        color: #f8f9fa; /* Ensure links are also light */
        transition: color 0.3s ease; /* Smooth transition for hover effect */
    }

    footer a:hover {
        color: #adb5bd; /* Slightly lighter color on hover */
    }

    footer .container {
        max-width: 990px; /* Restrict container width for better alignment */
    }

    footer p {
        margin-bottom: 0.10rem; /* Adjust spacing between paragraphs */
    }

    .float-end {
        float: right;
    }

    @media (max-width: 576px) {
        .float-end {
            float: none;
            text-align: center;
            margin-top: 1rem;
        }
    }
</style>
