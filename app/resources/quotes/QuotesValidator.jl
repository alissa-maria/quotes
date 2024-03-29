module QuotesValidator

using SearchLight, SearchLight.Validation, Dates

function not_empty(field::Symbol, m::T)::ValidationResult where {T<:AbstractModel}
  isempty(getfield(m, field)) && return ValidationResult(invalid, :not_empty, "should not be empty")

  ValidationResult(valid)
end

function is_int(field::Symbol, m::T)::ValidationResult where {T<:AbstractModel}
  isa(getfield(m, field), Int) || return ValidationResult(invalid, :is_int, "should be an int")

  ValidationResult(valid)
end

function valid_date(field::Symbol, m::T)::ValidationResult where {T<:AbstractModel}
  date_str = Dates.format(Dates.Date(getfield(m, field)), "yyyy-mm-dd")
  date = Date(date_str, "yyyy-mm-dd")
  date <= Dates.today() || return ValidationResult(invalid, :valid_date, "day has not yet come")

  ValidationResult(valid)
end

function is_unique(field::Symbol, m::T)::ValidationResult where {T<:AbstractModel}
  obj = findone(typeof(m); NamedTuple(field => getfield(m, field))... )
  if ( obj !== nothing && ! ispersisted(m) )
    return ValidationResult(invalid, :is_unique, "already exists")
  end

  ValidationResult(valid)
end

end
