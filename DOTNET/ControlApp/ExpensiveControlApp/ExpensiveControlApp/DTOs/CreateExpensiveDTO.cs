using System.ComponentModel.DataAnnotations;

namespace ExpensiveControlApp.DTOs
{
    public class CreateExpensiveDTO
    {
        [Required(ErrorMessage = "Descrição é Obrigatória.")]
        public string Description { get; set; }

        [Required(ErrorMessage = "Valor é Obrigatório.")]
        [Range(0.01, 999999999, ErrorMessage = "Valor deve ser maior que 0.")]
        public double Value { get; set; }

        [Required(ErrorMessage = "Data é Obrigatória.")]
        public DateTime Date { get; set; }
    }
}
