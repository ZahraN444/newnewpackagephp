
# Lob Confidence Score 1

## Structure

`LobConfidenceScore1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `score` | `?float` | Required | A numerical score between 0 and 100 that represents the percentage of mailpieces Lob has sent to this addresses that have been delivered successfully over the past 2 years. Will be `null` if no tracking data exists for this address.<br>**Constraints**: `>= 0`, `<= 100` | getScore(): ?float | setScore(?float score): void |
| `level` | [`string(LevelEnum)`](../../doc/models/level-enum.md) | Required | - | getLevel(): string | setLevel(string level): void |

## Example (as JSON)

```json
{
  "score": 180.6,
  "level": "high"
}
```

