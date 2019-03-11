<template>
    <v-container color="blue">
    <v-flex color="blue" xs10>
    <v-toolbar color="blue" dark>
        <v-toolbar-side-icon @click.stop="$parent.drawer = !$parent.drawer" class="hidden-md-and-up"></v-toolbar-side-icon>
        <v-toolbar-title>Title</v-toolbar-title>
        <v-spacer></v-spacer>
        <v-toolbar-items class="hidden-sm-and-down">
            <v-btn href="/" flat>Inicio</v-btn>
            <v-btn flat>Productos</v-btn>
            <v-btn flat>Nosotros</v-btn>
            <v-btn href="/login" dark color="teal" flat class="text-white">Iniciar Sesión</v-btn>
            <v-btn href="/register" dark color="blue darken-4" flat><div class="text-white">Registrarse.</div></v-btn>
        </v-toolbar-items>
    </v-toolbar>
       </v-flex>
   </v-container>


<!--        <v-flex xs10 offset-xs1>
    
          <v-toolbar card prominent>
            <v-toolbar-title class="body-2 grey--text">Title</v-toolbar-title>

            <v-spacer></v-spacer>

            <v-btn icon>
              <v-icon>search</v-icon>
            </v-btn>

            <v-btn icon>
              <v-icon>apps</v-icon>
            </v-btn>

            <v-btn icon>
              <v-icon>more_vert</v-icon>
            </v-btn>
          </v-toolbar>

    
      </v-flex> -->


</template>