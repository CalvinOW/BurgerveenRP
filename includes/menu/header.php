<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="../../assets/css/theme.css">
    <title>Burgerveen RP &bull; Maak een nieuwe start.</title>

    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
    <script src="https://unpkg.com/feather-icons"></script>
    <script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script>
        const navLinks = document.querySelectorAll('#toggler')
        const menuToggle = document.getElementById('navbarSupportedContent')
        const bsCollapse = new bootstrap.Collapse(menuToggle, {
            toggle: false
        })
        navLinks.forEach((l) => {
            l.addEventListener('click', () => {
                bsCollapse.toggle()
            })
        })
    </script>
</head>