var tour = new Tour({
    steps: [
    {
      element: ".tour-step1",
      title: "¡HI!",
      content: "We have created a digital tool that compiles all the information from the Sales Guide, BIG15 and itinerary maps.",
      placement: "right",
      onShow: function(tour){
        var nameProvided = $("input[name=your_name]").val();
        if ($.trim(nameProvided) !== ""){
            name = nameProvided;
        }
    }
    },
    {
        element: ".tour-step2",
        title: "To begin you can click on each 'Island'.",
        content: "You will be able to see how its Visiting Points + Activities + Itineraries that visit it and the Big15 that you can see are marked.",
        placement: "bottom"
  
    },
    {
      element: ".tour-step3",
      title: "You can also click on each 'Visit Point'.",
      content: "You will be able to observe that the Island to which it belongs + Activities + Boats that visit it are marked."
    },
    {
      element: ".tour-step4",
      title: "By clicking on each 'Activity",
      content: "The island, its points of visit and the itineraries that lead to it will be marked."
    },
    {
      element: ".tour-step5",
      title: "In the activities section when you see:",
      content: "P, refers to an activity exclusive to La Pinta."
    },
    {
      element: ".tour-step6",
      title: "By clicking on each 'Activity",
      content: "The island, its points of visit and the itineraries that lead to it will be marked."
    },
    {
      element: ".tour-step7",
      title: "I, refers to an activity exclusive to Isabela II.",
      content: "The island, its points of visit and the itineraries that lead to it will be marked."
    },
    {
      element: ".tour-step8",
      title: "S, refers to an activity exclusive to Santa Cruz II.",
      content: ""
    },
    {
      element: ".tour-step9",
      title: "The sighted means that all 3 vessels are engaged in this activity.",
      content: ""
    },
    {
      element: ".tour-step10",
      title: "By clicking on the Ship's name",
      content: "All your itineraries are marked with your Islands, Points of Visit and Big15"
    },
    {
      element: ".tour-step11",
      title: "When you click on an 'Itinerary'.",
      content: "You will see how their sequence of visit + Island + Visit Points + Activities + Big15 are highlighted."
    },
    {
      element: ".tour-step12",
      title: "Below each route is the total number of Big15 observing that route (11 B15).",
      content: " ",
      placement: "bottom"
    },
    {
      element: ".tour-step13",
      title: "You can also note the day on which the itinerary starts.",
      content: "(Example: M1, starts Monday)",
      placement: "left"
    },
    {
      element: ".tour-step14",
      title: "Within each itinerary column you will see a code: ",
      content: "'7-D4Mo' the 7 is the number of the activity, which occurs on day 4 which is Monday.",
      placement: "top"
    },
    {
      element: ".tour-step15",
      title: "By clicking on a species in the BIG15 ",
      content: "You will be able to see how the islands are marked where you can see it + Visiting Points + Itineraries."
    },
    {
      element: ".tour-step16",
      title: "The numbers under the BIG15",
      content: "It is the total number of itineraries in which each species can be observed. That is, the lower the number, the more difficult it is to observe the species. ",
      placement: "bottom"
    },
    {
      element: ".tour-step17",
      title: "The numbers in the right-hand end column",
      content: "This is the total number of BIG15 observed per visit point.",
      placement: "left"
    },
    {
      element: ".tour-step18",
      title: "Ready! Learn quickly and easily!",
      content: "All suggestions for improvement are welcome to “Danny Garrido”",
      placement: "center"

    }  
  ],
    backdrop: true,
    storage: false
  });
  
  tour.init();
  //tour.start();
  $('#initialize-tour').click(function(){
    tour.restart();

  });




/*
$(document).ready(function(){

// Instance the tour
var tour = new Tour({
    steps: [
    {
      element: ".tour-step1",
      
    },
    {
      element: "#tour-step2",
      title: "Para comenzar puedes dar clic en cada 'Isla'",
      content: "Podrás observar como se marcan sus Puntos de Visita + Actividades + Itinerarios que la visitan y los Big15 que puedes ver."
    },
    {
      element: "#tour-step3",
      title: "También puedes dar clic en cada 'Punto de visita'",
      content: "Podrás observa que se marca la Isla a la que pertenece + Actividades + Barcos que lo visitan"
    },
    {
      element: "#tour-step4",
      title: "Al darle clic a cada 'Actividad'",
      content: "Se marcará la Isla, sus Puntos de Visita y los itinerarios que la realizan"
    },
    {
      element: "#tour-step5",
      title: "En la parte de actividades cuando veas:",
      content: "P, se refiere a una actividad exclusiva de La Pinta"
    },
    {
      element: "#tour-step6",
      title: "Al darle clic a cada 'Actividad'",
      content: "Se marcará la Isla, sus Puntos de Visita y los itinerarios que la realizan"
    },
    {
      element: "#tour-step7",
      title: "I, se refiere a una actividad exclusiva del Isabela II",
      content: "Se marcará la Isla, sus Puntos de Visita y los itinerarios que la realizan"
    },
    {
      element: "#tour-step8",
      title: "S, se refiere a una actividad exclusiva del Santa Cruz II",
      content: ""
    },
    {
      element: "#tour-step9",
      title: "Los vistos quieren decir que los 3 barcos realizan esa actividad.",
      content: ""
    },
    {
      element: "#tour-step10",
      title: "Al dar clic al nombre del Barco ",
      content: "Se marcan todos sus itinerarios con sus Islas, Puntos de Visita y Big15"
    },
    {
      element: "#tour-step11",
      title: "Al darle clic a un 'Itinerario'",
      content: "Verás cómo se resaltan su secuencia de visita + Isla + Puntos de Visita + Actividades + Big15"
    },
    {
      element: "#tour-step12",
      title: "Debajo de cada itinerario se encuentra el número total de Big15 que observa dicho itinerario",
      content: " "
    },
    {
      element: "#tour-step13",
      title: "También puedes observar el día en el que el itinerario empieza",
      content: "(Ejemplo: L1, empieza el Lunes)"
    },
    {
      element: "#tour-step14",
      title: "Dentro de cada columna de itinerario verás un código: ",
      content: "'7-D4Lu' el 7 es el número de la actividad, que ocurre en el día 4 que es el Lunes."
    },
    {
      element: "#tour-step15",
      title: "Al darle clic a una especie del BIG15 ",
      content: "Podrás observar cómo se marcan las Islas donde lo puede ver + Puntos de Visita + Itinerarios"
    },
    {
      element: "#tour-step16",
      title: "Los números debajo de los BIG15",
      content: "Es el número total de itinerarios en el que se puede observar cada especie. Es decir, mientras menor sea el número la especie es más difícil de observar. "
    },
    {
      element: "#tour-step17",
      title: "Los números de la columna final derecha",
      content: "Es el total de BIG15 que se observan por punto de visita."
    },
    {
      element: "#tour-step18",
      title: "¡Listo! ¡Aprende fácil y rápido!",
      content: "Toda sugerencia de mejora es bienvenida a “Danny Garrido”"
    }
  ]});
  
  // Initialize the tour
  tour.init();
  
  // Start the tour
  tour.start();

});

*/