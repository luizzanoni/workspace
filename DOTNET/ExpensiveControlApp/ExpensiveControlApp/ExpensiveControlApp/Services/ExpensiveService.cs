using ExpensiveControlApp.Infra.Database;
using ExpensiveControlApp.Models.Expensives;
using Microsoft.EntityFrameworkCore;

namespace ExpensiveControlApp.Services
{
    public class ExpensiveService : IExpensiveService
    {
        private readonly ExpensiveControlContext _dbContext;
        public ExpensiveService(ExpensiveControlContext context)
        {
            _dbContext = context;
        }

        public async Task Create(DTOs.CreateExpensiveDTO createExpensiveDTO)
        {
            await _dbContext.Expensives.AddAsync(new Expensive()
            {
                Description = createExpensiveDTO.Description,
                Date = createExpensiveDTO.Date,
                Value = createExpensiveDTO.Value
            });

            await _dbContext.SaveChangesAsync();
        }

        public async Task<List<Expensive>> FindBy(DateTime starDate, DateTime endDate)
        {
            if( starDate > endDate)
            {
                throw new Exception("Data final deve ser maior que a data inicial.");
            }

            var items = await _dbContext.Expensives.Where(e => e.Date >= starDate && e.Date <= endDate).AsNoTracking()
                                                   .ToListAsync();

            return items;
        }
    }
}
