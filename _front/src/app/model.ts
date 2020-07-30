export interface Categoria {
  id?: number;
  nome: string;
  categoria?: number;
  _embedded?: {
    categoria?: Categoria;
  }
}

export interface Exercicio {
  id?: number;
  nome: string;
  descricao: string;
  categoria?: number;
  _embedded?: {
    categoria?: Categoria;
  }
}

export interface Video {
  id?: number;
  titulo: string;
  descricao: string;
  url: string;
  exercicio?: number;
  _embedded?: {
    exercicio?: Exercicio;
  }
}

export interface Imagem {
  id?: number;
  titulo: string;
  descricao: string;
  src: string;
  exercicio?: number;
  _embedded?: {
    exercicio?: Exercicio;
  }
}
