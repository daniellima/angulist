# angulist
A project used to learn angular. The main objective is a simple todolist written using Angular.js and Laravel 5

The objective is to have a pure javascript frontend and a Laravel Backed API. I will try to adhere to the RESTfull pattern.

Inspiration has come from todomvc.com and the fact that I love todo lists.

## Features:

- [x] login
- [ ] logout
- [x] list tasks
- [x] add tasks
- [ ] mark task done
- [ ] clear done tasks
- [ ] edit task
- [ ] delete task
- [ ] add due date
- [ ] sort by due date
- [ ] add messages to task

## Problems:

- [x] como usar validação de formulario do angular? ver o [Developer Guide](https://docs.angularjs.org/guide/forms)
- CSRF token?
- Retornar apenas as propriedades que eu quero dos objetos no laravel via AJAX
- o que é $rootScope.$apply
- como fazer logout? 
- tem algum tipo de middleware para angular? (para impedir de acessar uma rota por exemplo)
- como mostrar loading? (global loading indicator)
- mostrar informações do usuario no template
- qual a diferença entre um serviço e um provider
- A classe Resource não envia XMLHttpRequest...
- global error handling for requests (se Unathorized de qualquer lugar, redireciona para login)