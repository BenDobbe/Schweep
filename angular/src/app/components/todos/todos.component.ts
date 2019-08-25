import { Component, OnInit } from '@angular/core';
import { TodoService } from 'src/app/services/todo.service';
import { HeaderService } from 'src/app/services/header.service';
import { Todo } from 'src/app/models/Todo';

@Component({
  selector: 'app-todos',
  templateUrl: './todos.component.html',
  styleUrls: ['./todos.component.scss']
})
export class TodosComponent implements OnInit {
  todos: Todo[];

  constructor(
    private todoService: TodoService,
    private headerService: HeaderService,
    ) { }

  ngOnInit() {
    setTimeout(() => {
      this.headerService.setTitle('Todo list');
    });
    this.todoService.getTodos().subscribe(todos => {
      this.todos = todos;
    });
  }

  deleteTodo(todo: Todo) {
    // Remove From UI
    this.todos = this.todos.filter(t => t.id !== todo.id);
    // Remove from server
    this.todoService.deleteTodo(todo).subscribe();
  }

  addTodo(todo: Todo) {
    this.todoService.addTodo(todo).subscribe(todo => {
      this.todos.push(todo);
    });
  }

}
