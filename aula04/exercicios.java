package aula04;
import java.util.Scanner;
import java.util.ArrayList;

public class exercicios {
	public static void main(String[] args) {
		Scanner scanner = new Scanner(System.in);
		TestarArrayAluno turma = new TestarArrayAluno();
		
		
		
		for (int i = 0; i < turma.getTamanho(); i++) {
			
			System.out.println("Escreva Nome do Aluno" + (i+1) + ":" );
			String nome = scanner.nextLine();
			
			System.out.println("Escreva a primeira nota" + (i+1) + ":");
			double nota1 = scanner.nextDouble();
			scanner.nextLine();
			
			System.out.println("Escreva a segunda nota" + (i+1) + "");
			double nota2 = scanner.nextDouble();
			scanner.nextLine();
			
			 Aluno aluno = new Aluno(nome, nota1, nota2);
	         turma.AdicionarAluno(i, aluno);
			
		}
		turma.MostrarMedias();
		}
		
		}
	

class Aluno {
	String nome;
	double nota1;
	double nota2;
	
	
	public Aluno(String nome, double nota1, double nota2) {
		this.nome = nome;
		this.nota1 = nota1;
		this.nota2 = nota2;
	
}
	public double CalcularMedia () {
		return (nota1 + nota2) /2;
	}
	
}
class TestarArrayAluno  {
	Aluno[] turma;
	public TestarArrayAluno() {
		turma = new Aluno[5];
	}
	public void AdicionarAluno(int i, Aluno aluno) {
	    if (i >= 0 && i < turma.length) {
	        turma[i] = aluno;
	    } else {
	        System.out.println("Inválido");
	    }
	}
	public void MostrarMedias() {
		System.out.println("Média dos alunos");
		for (Aluno aluno : turma) {
		if (aluno != null) {
			System.out.println("Nome: "+ aluno.nome +" -- Média:"+ aluno.CalcularMedia());
		}
	
		}
		
		}
	  public int getTamanho() {
	        return turma.length;
	    }
	}

	

