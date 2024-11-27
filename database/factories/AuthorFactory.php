<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $authors = [
            'Gabriel García Márquez',
            'Mario Vargas Llosa',
            'Jorge Luis Borges',
            'Isabel Allende',
            'Pablo Neruda',
            'Julio Cortázar',
            'Carlos Fuentes',
            'Federico García Lorca',
            'Salvador Allende',
            'Miguel de Cervantes',
            'William Shakespeare',
            'Charles Dickens',
            'Leo Tolstoy',
            'Fyodor Dostoevsky',
            'Jane Austen',
            'Virginia Woolf',
            'Franz Kafka',
            'Ernest Hemingway',
            'Mark Twain',
            'H.G. Wells',
            'J.R.R. Tolkien',
            'J.K. Rowling',
            'Stephen King',
            'Agatha Christie',
            'Edgar Allan Poe',
            'Mary Shelley',
            'Oscar Wilde',
            'F. Scott Fitzgerald',
            'Emily Dickinson',
            'Emily Brontë',
            'Charlotte Brontë',
            'Nathaniel Hawthorne',
            'Jack London',
            'Herman Melville',
            'Albert Camus',
            'Jean-Paul Sartre',
            'Simone de Beauvoir',
            'Albert Einstein',
            'Carl Jung',
            'Carl Sagan',
            'Richard Dawkins',
            'George Orwell',
            'Aldous Huxley',
            'Louisa May Alcott',
            'Anne Rice',
            'Neil Gaiman',
            'Margaret Atwood',
            'Khaled Hosseini',
            'John Steinbeck',
            'Thomas Hardy',
            'William Faulkner',
            'John Milton',
            'Virginia Andrews',
            'Hunter S. Thompson',
            'Haruki Murakami',
            'Paulo Coelho',
            'Zadie Smith',
            'Toni Morrison',
            'Chimamanda Ngozi Adichie',
            'John Green',
            'Suzanne Collins',
            'George R.R. Martin',
            'Cormac McCarthy',
            'Ray Bradbury',
            'Alice Walker',
            'Maya Angelou',
            'Eudora Welty',
            'Willa Cather',
            'Ralph Waldo Emerson',
            'Henry David Thoreau',
            'William Butler Yeats',
            'Walt Whitman',
            'Joan Didion',
            'Doris Lessing',
            'Jonathan Franzen',
            'Kazuo Ishiguro',
            'Graham Greene',
            'Tom Wolfe',
            'Richard Wright',
            'E. L. James',
            'Milan Kundera',
            'Jodi Picoult',
            'Dan Brown',
            'Stephenie Meyer',
            'Cassandra Clare',
            'Rick Riordan',
            'Kurt Vonnegut',
            'Patricia Highsmith',
            'Robert Frost',
            'Sylvia Plath',
            'Kurt Vonnegut',
            'Chuck Palahniuk'
        ];
        $autor = $this->faker->unique()->randomElement($authors);
        return [
            'nombre' => $autor,
            'bio' => $this->faker->paragraph(),
            'birth_date' => $this->faker->date(),
            'nationality' => $this->faker->country(),
            'main_category' => $this->faker->word(),
        ];
    }
}
