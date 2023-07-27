$(function () {
    $(function () {
        $('.datepicker').datepicker({
            autoclose: true,
            todayHighlight: true
        });

        $('.lobilist').perfectScrollbar();

        buscaSteps();
    });
});


function buscaSteps() {
    fetch('http://onlicitacao.test/dashboard/steps')
        .then(res => res.json())
        .then(res => {
            let steps = [];

            res.forEach((item, index) => {
                steps.push({
                    tarefa: item.id,
                    title: item.step,
                    defaultStyle: 'lobilist-success',
                    items: item.items
                })
            })

            $('#todo-lists-basic-demo').lobiList({
                lists: steps,
                actions: {
                    insert: 'http://onlicitacao.test/dashboard/steps',
                    delete: 'http://onlicitacao.test/dashboard/steps/excluir',
                    update: '../example1/update.php'
                },
                beforeItemAdd: function () {
                    console.log(arguments)
                },
                afterItemReorder: function () {
                    console.log(arguments)
                    Lobibox.notify('default', {
                        msg: 'afterItemReorder'
                    });
                },
                afterItemDelete: function () {

                }
            });
        })
}
