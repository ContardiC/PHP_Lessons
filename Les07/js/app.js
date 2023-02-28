$(document).ready(
    function (){
        function renderTask(){
            let taskText=$('#txt-task').val();
            let selectedDay=parseInt($('#selected-day').val());
            console.log(selectedDay);

            $("table td:nth-child("+selectedDay+")").each(function() {
                if ($(this).text() === "") {
                    $(this).text(taskText);
                    return false; // interrompere la ricerca
                }
            });


        }
        $('#btn-add-task').click(function(){
            renderTask();
        });
    }
    // TODO: renderlo decente
);